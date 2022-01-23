<?php
include 'avatar.php';

function orderCard($orderNumber, $order)
{ ?>
    <div class="card mb-5">
        <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <?php avatar($order['customer']->name) ?>
                    <div>
                        <span><?= $order['customer']->name ?></span>
                        <p class="small text-muted card-subtitle text-secondary"><?= $order['customer']->contactNumber ?></p>
                    </div>
                </div>

                <div class="text-secondary small  align-text-top  text-right">
                    <div class="font-weight-bold">
                        <span>Order #:</span>
                        <span><?= $orderNumber ?></span>
                    </div>
                    <div>
                        <?= date('h:i A', strtotime($order['orderDate'])) ?>
                    </div>

                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="text-secondary d-flex align-items-center">
                <i class="fas fa-home mr-2"></i>
                <span>
                    <small>
                        <?= $order['customer']->address ?>
                    </small>
                </span>
            </div>
            <div class="text-secondary d-flex align-items-center ">
                <i class="fas fa-envelope-square mr-2"></i>
                <span>
                    <small>
                        <?= $order['customer']->email ?>
                    </small>
                </span>
            </div>
            <table class="table table-sm small table-bordered table-responsive-md table-md mt-3">
                <thead class="bg-secondary text-light">
                    <tr class="text-center">
                        <th class="align-top">Description</th>
                        <th class="align-top">Quantity</th>
                        <th class="align-top">Unit</th>
                        <th>Unit Price</th>
                        <th>Total Price</th>
                    </tr>
                </thead>

                <tbody class="bg-light">
                    <?php foreach ($order['orders'] as $item) : ?>
                        <?php $total = ($total ?? 0) + $item->amount ?>
                        <tr class="text-center text-secondary">
                            <td class="col-2"> <?= $item->description ?></td>
                            <td class="col-1"> <?= $item->quantity ?></td>
                            <td class="col-1"> <?= $item->unit ?></td>
                            <td class="col-1">₱ <?= $item->unitPrice ?></td>
                            <td class="col-2">₱ <?= $item->amount ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>

        <div class="card-footer d-flex justify-content-between align-items-center font-weight-bold">
            <span>Total: </span>
            <span>₱ <?= $total ?>.0</span>
        </div>
    </div>
<?php } ?>