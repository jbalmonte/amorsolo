<?php
$dbServername = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'activity_5';

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) or
    die("Connection Failed:" . mysqli_connect_error());;
