<?php
include_once './classes/product.php';

$url = explode('/', $_SERVER['SCRIPT_NAME'])[2];

function navItem($str)
{
    global $url;
    echo '<li class="nav-item ' . ($url == $str  ? 'active' : '') . '">';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@4cac1a6/css/all.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <style>
        body {
            overflow-y: scroll;
        }

        #main-table {
            width: 150%;
        }

        @media screen and (max-width:1000px) {
            #main-table {
                width: 100%;
            }

            .table-sm {
                width: 100%;
            }

            td:nth-child(2) {
                width: 80%;
            }
        }
    </style>
</head>

<body class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div><a class="navbar-brand" href="#" id="logo"><i class="fal fa-utensils-alt"></i> Amorsolo</a></div>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav ml-auto mt-2 mr-2 mt-lg-0">
            <?php navItem('index.php') ?>
            <a class="nav-link" href="index.php">Order<span class="sr-only">(current)</span></a>
            </li>
            <?php navItem('customer_info.php') ?>

            <a class="nav-link" href="customer_info.php">Customer</a>
            </li>
            <?php navItem('order_list.php') ?>
            <a class="nav-link" href="order_list.php">List of Orders</a>
            </li>
        </ul>
    </nav>