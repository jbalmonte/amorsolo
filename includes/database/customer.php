<?php
if ($_SESSION['customerID']) {
    $sql = "SELECT * FROM Customer WHERE id = " . $_SESSION['customerID'] . "";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $customer = mysqli_fetch_object($result);
    }
}
