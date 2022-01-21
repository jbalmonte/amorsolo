<?php
include 'includes/components/header.php';
include 'includes/components/modal.php';
?>

<form class="card my-5 mx-auto shadow-sm" style="max-width: 50%;" action="" method="POST">
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
                                <input type="text" class="form-control form-control-sm" required id="name">
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
                                <input type="text" class="form-control form-control-sm" required id="address">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-map-marker"></i> </span>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-left">
                            <label for="contact-number" class=" col-form-label col-form-label-sm">Contact
                                Number:</label>
                        </td>
                        <td class="text-left">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm" required id="contact-number">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-phone fa-sm"></i> </span>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-left">
                            <label for="email" class=" col-form-label col-form-label-sm">Email:</label>
                        </td>

                        <td>
                            <div class="input-group">
                                <input type="email" class="form-control form-control-sm" required id="email">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-envelope fa-sm"></i> </span>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>

                <!-- <div>
                        <table class="table-sm">
                            <tr>
                                <td>
                                    <label for="order-date" class=" col-form-label col-form-label-sm">Order
                                        Date:</label>
                                </td>

                                <td class="text-secondary small text-right">
                                    <input type="date" class="form-control form-control-sm" disabled value="<?= date('Y-m-d'); ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="order-number" class="col-form-label col-form-label-sm" disabled>Order
                                        Number:</label>
                                </td>

                                <td class="text-secondary small  text-right">
                                    <input type="number" class="form-control form-control-sm" disabled id="order-number" value="2">
                                </td>
                            </tr>
                        </table>
                    </div> -->

            </div>
        </div>
    </div>
    <div class="card-footer text-right">

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#customer-info-msg"> <i class="fas fa-save"></i>
            Save</button>
        <button type="button" onclick="myReset()" class="btn btn-danger"> <i class="fas fa-redo"></i> Reset</button>
    </div>
</form>


<script>
    function myReset() {
        const fields = ['name', 'address', 'contact-number', 'email']
        for (let field of fields) {
            document.querySelector(`#${field}`).value = ""
        }
    }
</script>
</body>

</html>