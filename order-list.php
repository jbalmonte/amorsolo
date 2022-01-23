<?php
include 'includes/components/header.php';
include 'includes/components/order-card.php';
require_once 'includes/database/order-list.php';
?>

<div class="card my-5 mx-auto shadow-sm" style="max-width: 70%;">
    <div class="card-header text-light bg-info text-center">
        <i class="fas fa-pen-alt"></i> ORDER LIST
    </div>
    <div class="card-body bg-light px-5 py-4">
        <div class="card">
            <div class="card-header text-right">
                Today:
                <span class=" text-secondary">
                    <?= date('F d, Y') ?>
                </span>
            </div>
            <div class="card-body d-flex align-items-top justify-content-between flex-wrap">
                <?php foreach ($orders as $orderNumber => $order) {
                    orderCard($orderNumber, $order);
                } ?>
            </div>
        </div>

    </div>
</div>
</body>

</html>