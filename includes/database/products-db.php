<?php
$sql = "SELECT * FROM Product;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_object($result)) {
        $products[] = $row;
    }
}
