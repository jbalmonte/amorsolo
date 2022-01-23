<?php
include 'includes/components/header.php';
include 'includes/components/modal.php';

require 'includes/process/customer-process.php';

// session_destroy();
// var_dump($_SESSION);
?>

<form class="card my-5 mx-auto shadow-sm" method="POST" id="customer-form" style="max-width: 50%;">
    <div class="card-header text-light bg-info text-center">
        <i class="fas fa-pen-alt"></i> CUSTOMER FORM
    </div>
    <div class="card-body bg-light px-5 py-4">
        <div class="card">
            <div class="card-header bg-secondary text-light">
                <i class="far fa-address-card"></i>
                Customer
            </div>
            <div class="card-body text-dark text-center">
                <table class="table table-sm table-borderless w-100" id="main-table">
                    <tr>
                        <td class="text-left">
                            <label for="name" class="col-form-label col-form-label-sm">
                                Full Name:
                            </label>
                        </td>
                        <td>
                            <div class="input-group">
                                <input type="text" name="name" class="form-control form-control-sm" id="name" <?= $_SESSION['name'] ? 'disabled' : '' ?> value="<?= $_SESSION['name'] ?? '' ?>">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-user"></i> </span>
                                </div>
                            </div>

                        </td>
                    </tr>

                    <tr>
                        <td class="text-left">
                            <label for="address" class="col-form-label col-form-label-sm">
                                Address:
                            </label>
                        </td>
                        <td>
                            <div class="input-group">
                                <input type="text" name="address" class="form-control form-control-sm" id="address" <?= $_SESSION['address'] ? 'disabled' : '' ?> value="<?= $_SESSION['address'] ?? '' ?>">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-map-marker"></i> </span>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-left">
                            <label for="contact-number" class="col-form-label col-form-label-sm">Contact
                                Number:</label>
                        </td>
                        <td class="text-left">
                            <div class="input-group">
                                <input type="text" name="contact-number" class="form-control form-control-sm" id="contact-number" <?= $_SESSION['contactNumber'] ? 'disabled' : '' ?> value="<?= $_SESSION['contactNumber'] ?? '' ?>">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-phone fa-sm"></i> </span>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-left">
                            <label for="email" class="col-form-label col-form-label-sm">Email:</label>
                        </td>

                        <td>
                            <div class="input-group">
                                <input type="email" name="email" class="form-control form-control-sm" id="email" <?= $_SESSION['email'] ? 'disabled' : '' ?> value="<?= $_SESSION['email'] ?? '' ?>">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-envelope fa-sm"></i> </span>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="card-footer text-right">

        <button type="submit" id="save-btn" class="btn btn-primary <?= $_SESSION ? 'd-none' : '' ?>"> <i class="fas fa-save"></i>
            Save</button>
        <button type="button" id="reset-btn" onclick="myReset()" class="btn btn-danger <?= $_SESSION ?  'd-none' : '' ?>"> <i class="fas fa-redo"></i> Reset</button>

        <button type="button" onclick="location.href='order-form.php'" class="btn btn-primary <?= $_SESSION && !$errorMessage ? '' : 'd-none' ?>" id="next-btn"> Next <i class="fas fa-chevron-right"></i>
        </button>
    </div>
</form>

<?php
createModal('customer-error-modal', 'Error', 'Please fill out all the fields!', 'danger', 'exclamation-circle');
createModal('customer-info-modal', 'Message', 'Information has been saved!', 'success', 'envelope');
?>


<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    <?php
    if (!empty($status)) {
        echo "$(document).ready(function() {
        $('#customer-" . ($status === "error" ? 'error' : 'info') . "-modal').modal({
            show: true
        });
    })";
    }
    $status = "";
    ?>
</script>
</body>

</html>