<?php
include 'includes/components/header.php';
include 'includes/components/modal.php';
include_once 'includes/database/products-db.php';
require_once 'includes/process/order-process.php'
?>


<form class="card my-5 mx-auto shadow-sm" style="max-width: 80%;" id="order-form" method="POST">
    <div class="card-header text-light bg-info text-center">
        <i class="fas fa-pen-alt"></i> ORDER FORM
    </div>
    <div class="card-body bg-light px-5 py-4">
        <table class="table table-bordered table-responsive-md table-md">
            <thead class="bg-secondary text-light">
                <tr class="text-center">
                    <th>Product Code</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Unit</th>
                    <th>Unit Price (₱)</th>
                    <th>Total Price (₱)</th>
                </tr>
            </thead>

            <tbody class="bg-light">
                <?php foreach ($products as $product) : ?>
                    <tr class="text-center text-secondary">
                        <?php $description = str_replace(' ', '-', strtolower($product->description)) ?>
                        <td class="col-2">
                            <?= $product->product_code ?>
                            <input type="hidden" name="product_code<?= $product->product_code ?>" value="<?= $product->product_code ?>">
                        </td>
                        <td class="col-3"> <?= $product->description ?> </td>
                        <td class="col-1">
                            <input type="number" name="quantity<?= $product->product_code; ?>" min="0" onchange="handleQtyChange('<?= $description; ?>', <?= $product->unit_price; ?>, this.value)" class="form-control form-control-sm text-center">
                        </td>
                        <td class="col-1"><?= $product->unit ?> </td>
                        <td class="col-2"> <?= $product->unit_price ?> </td>
                        <td class="col-2">
                            <input type="text" readonly class="form-control form-control-sm text-center" name="amount<?= $product->product_code ?>" id="<?= $description ?>" value="0.0">

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="ml-auto col-lg-5 mr-md-n5">
            <div class="input-group row">
                <label for="total" class="col-form-label col-md-3">Total:</label>
                <div class="input-group col-md-9">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            ₱
                        </span>
                    </div>
                    <input type="number" name="total" id="total" disabled class="form-control text-center" value="0.0">
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer text-right">
        <button type="submit" name="submit" value="submit" class="btn btn-success"> <i class="far fa-paper-plane"></i>
            Submit</button>
        <button type="reset" class="btn btn-danger"> <i class="fas fa-redo"></i> Reset</button>
    </div>
</form>

<script src="script.js"></script>

<?php
createModal('order-info-modal', 'Message', 'Order successful! <br> Do you want to view your order?', 'info', 'envelope', true, 'order-list.php');
createModal('order-error-modal', 'Error', 'Please select at least one item!', 'danger', 'exclamation-circle`');
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
    <?php
    if (!empty($status)) {
        echo "$(document).ready(function() {
        $('#order-" . ($status === "error" ? 'error' : 'info') . "-modal').modal({
            show: true
        });
    })";
    }
    $status = "";
    ?>
</script>
</body>

</html>