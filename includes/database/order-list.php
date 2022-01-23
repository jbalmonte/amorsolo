<?php
require './classes/product-order.php';
require './classes/customer.php';

$sql = "SELECT o.order_number,c.name, c.contact_number,c.address,c.email,p.description,p.unit_price,p.unit,oi.quantity, oi.amount FROM `OrderItems` AS oi INNER JOIN `Order` AS o ON oi.order_number = o.`order_number` INNER JOIN Customer AS c ON c.id = o.`customer_id` INNER JOIN Product as p ON p.product_code = oi.product_code ORDER BY o.order_date DESC;";

$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        //if there is no existing value in the orders array with the order number key... populate the customer record
        if (!isset($orders[$row['order_number']])) {
            $orders[$row['order_number']]['customer']  =
                new Customer($row['name'], $row['contact_number'], $row['address'], $row['email']);
        }

        //append orders in assoc array
        $orders[$row['order_number']]['orders'][] =
            new ProductOrder($row['description'], $row['unit_price'], $row['unit'], $row['quantity'], $row['amount']);
    }
}
