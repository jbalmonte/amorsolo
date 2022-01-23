<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $contactNumber = $_POST['contact-number'];
    $email = $_POST['email'];
    $status = "";
    if (empty($name) || empty($address) || empty($contactNumber) || empty($email)) {
        $status = "error";
    } else {
        $_SESSION['name'] = $name;
        $_SESSION['address'] = $address;
        $_SESSION['contactNumber'] = $contactNumber;
        $_SESSION['email'] = $email;

        $status = "success";
    }
}
