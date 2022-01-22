<?php
include 'avatar.php';

function orderCard($order)
{ ?>
    <div class="card mb-5">
        <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <?php avatar("Joshua") ?>
                    <div>
                        <span>Joshua Balmonte</span>
                        <p class="small text-muted card-subtitle text-secondary">091234567891</p>
                    </div>
                </div>

                <div class="text-secondary small font-weight-bold align-text-top">
                    <span>Order #:</span>
                    <span>2</span>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div>
                <h6 class="text-secondary">Orders:</h6>
            </div>
            <table class="table table-sm small table-bordered table-responsive-md table-md">
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
                    <tr class="text-center text-secondary">
                        <td class="col-2"> Rice</td>
                        <td class="col-1"> cup</td>
                        <td class="col-1"> 4</td>
                        <td class="col-1">₱ 15</td>
                        <td class="col-2">₱ 60.0</td>
                    </tr>
                    <tr class="text-center text-secondary">
                        <td class="col-2"> Rice</td>
                        <td class="col-1"> cup</td>
                        <td class="col-1"> 4</td>
                        <td class="col-1">₱ 15</td>
                        <td class="col-2">₱ 60.0</td>
                    </tr>
                    <tr class="text-center text-secondary">
                        <td class="col-2"> Rice</td>
                        <td class="col-1"> cup</td>
                        <td class="col-1"> 4</td>
                        <td class="col-1">₱ 15</td>
                        <td class="col-2">₱ 60.0</td>
                    </tr>
                </tbody>
                <tfoot class="bg-light  text-dark font-weight-bold">
                    <tr>
                        <td colspan="6"></td>
                    </tr>
                </tfoot>
            </table>

        </div>

        <div class="card-footer d-flex justify-content-between align-items-center font-weight-bold">
            <span>Total: </span>
            <span>₱ 1000.0</span>
        </div>
    </div>';
<?php } ?>