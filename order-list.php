<?php
include 'includes/components/header.php';
include 'includes/components/order-card.php';
require_once 'includes/database/order-list-db.php';
?>

<div class="card my-5 mx-auto shadow-sm" style="max-width: 70%;">
    <div class="card-header text-light bg-info text-center">
        <i class="fas fa-pen-alt"></i> ORDER LIST
    </div>
    <div class="card-body bg-light px-5 py-4">
        <?php if (isset($orders)) { ?>
            <?php foreach ($orders as $orderDate => $orderList) : ?>
                <div class="card">
                    <div class="card-header bg-success text-light text-right">
                        <?php
                        $date =  date_format(date_create($orderDate), "F d, Y");
                        ?>
                        <span class="text-light">
                            <?= $date ?> <?= $date == date("F d, Y") ? '(Today)' : '' ?>
                        </span>
                    </div>
                    <div class="card-body d-flex align-items-top justify-content-around flex-wrap">
                        <?php foreach ($orderList as $orderNumber => $order) {
                            orderCard($orderNumber, $order);
                        } ?>
                    </div>
                <?php endforeach ?>
                </div>
            <?php } else { ?>
                <div class="text-center">
                    <img src="assets/no_data.svg" alt="No data" width="400" height="300" class="mb-3">
                    <h4 class="font-weight-bold">No orders to display</h4>
                </div>
            <?php } ?>
    </div>

</div>
</body>

</html>