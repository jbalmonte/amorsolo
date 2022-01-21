<?php
include 'includes/header.php';
include 'includes/order-card.php'
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
            <div class="card-body d-flex align-items-center justify-content-around flex-wrap">
                <?php orderCard('') ?>
                <?php orderCard('') ?>
                <?php orderCard('') ?>
            </div>
        </div>

    </div>
</div>
<script src="script.js"></script>
</body>

</html>