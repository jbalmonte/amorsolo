<?php
include './classes/product.php';

$url = explode('/', $_SERVER['SCRIPT_NAME'])[2];

function navItem($label, $route)
{
    global $url;
    $isActive = $url === $route;
    echo '<li class="nav-item ' .  ($isActive ? 'active' : '') . '">' .
        '<a class="nav-link" ' . ($isActive ? '' : 'href="' . $route) . '">' . $label . '</a>' .
        '</li>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amorsolo </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@4cac1a6/css/all.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <style>
        body {
            overflow-y: scroll;
        }

        #main-table {
            width: 130%;
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

        .nav-item {
            cursor: pointer;
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
            <?php navItem('Customer Form', 'index.php') ?>
            <?php navItem('Order Form', 'order-form.php') ?>
            <?php navItem('List of Orders', 'order-list.php') ?>
        </ul>
    </nav>