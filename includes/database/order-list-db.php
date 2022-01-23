<?php
require './classes/product-order-class.php';
require './classes/customer-class.php';

$sql = "SELECT o.order_number,c.name, c.contact_number,c.address,c.email,p.description,p.unit_price,p.unit,oi.quantity, oi.amount, o.order_date FROM `OrderItems` AS oi INNER JOIN `Order` AS o ON oi.order_number = o.`order_number` INNER JOIN Customer AS c ON c.id = o.`customer_id` INNER JOIN Product as p ON p.product_code = oi.product_code ORDER BY o.order_date DESC;";

$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $key = explode(' ', $row['order_date'])[0];
        $prevKey;

        //if there is no order_date key in the orders array, declare a new array
        if (!isset($orders[$key])) {
            $orders[$key] = [];
        } else {
            //if the order date is not the same anymore, sort the previous record by their order_number
            krsort($orders[$prevKey]);
        }

        // if there is no order number set, meaning there is no customer yet with that order number, populate it
        if (!isset($orders[$key][$row['order_number']])) {
            $orders[$key][$row['order_number']]['customer'] =
                new Customer($row['name'], $row['contact_number'], $row['address'], $row['email']);
        }

        //if there is no order date set, meaning there is no customer yet with that kind of order, populate it
        if (!isset($orders[$key][$row['order_number']]['orderDate'])) {
            $orders[$key][$row['order_number']]['orderDate'] = $row['order_date'];
        }

        //append the orders in assoc array
        $orders[$key][$row['order_number']]['orders'][] =
            new ProductOrder($row['description'], $row['unit_price'], $row['unit'], $row['quantity'], $row['amount']);

        $prevKey = $key;
    }
}
