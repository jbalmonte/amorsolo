<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $status = "";

    if (count($_POST) === 0) {
        $status = "error";
    } else {
        // insert customer record in db
        if ($_SESSION) {
            $sql = 'INSERT INTO Customer(name,contact_number,address,email) VALUES ("' . $_SESSION['name'] . '","' . $_SESSION['contactNumber'] . '","' . $_SESSION['address'] . '","' . $_SESSION['email'] . '")';
            if (mysqli_query($conn, $sql)) {
                $customerID = mysqli_insert_id($conn);
            } else {
                $status = "error";
                die("Error: " . $sql  . mysqli_error($conn));
            }
        }

        //insert in order table and get the order number (primary key)
        $order_sql = 'INSERT INTO `Order`(customer_id) VALUES(' . $customerID . ')';
        if (mysqli_query($conn, $order_sql)) {
            $orderNumber = mysqli_insert_id($conn);
        } else {
            $status = "error";
            die("Error: " . $sql  . mysqli_error($conn));
        }

        //insert data in order items
        foreach (range(1, 10) as $id) {
            if (isset($_POST['product_code' . $id])) {
                $order_items_sql = 'INSERT INTO OrderItems(order_number,product_code,quantity, amount) VALUES(' . $orderNumber . ',' . $id . ',' . $_POST['quantity' . $id] . ',' . $_POST['amount' . $id] . ')';
                if (!mysqli_query($conn, $order_items_sql)) {
                    $status = "error";
                    die("Error: " . $sql . mysqli_error($conn));
                }
            }
        }
        $status = "sucess";
    }
}
