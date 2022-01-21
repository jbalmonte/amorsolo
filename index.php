<?php
include 'includes/header.php'
?>

<form class="card my-5 mx-auto shadow-sm" style="max-width: 70%;" action="" method="POST">
    <div class="card-header text-light bg-info text-center">
        <i class="fas fa-pen-alt"></i> CUSTOMER FORM
    </div>
    <div class="card-body bg-light px-5 py-4">
        <div class="card">
            <div class="card-header bg-secondary text-light">
                <i class="far fa-user"></i>
                Customer
            </div>
            <div class="card-body text-dark">
                <div class="d-lg-flex justify-content-lg-between">
                    <div>
                        <table class="table-sm" id="main-table">
                            <tr>
                                <td>
                                    <label for="name" class="col-form-label col-form-label-sm">
                                        Customer Name:</label>
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" required id="name">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="address" class="col-form-label col-form-label-sm">Address:</label>
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" required id="address">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="contact-number" class=" col-form-label col-form-label-sm">Contact
                                        Number:</label>
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" required id="contact-number">
                                </td>
                            </tr>


                            </tr>

                            <tr>
                                <td>
                                    <label for="email" class=" col-form-label col-form-label-sm">Email:</label>
                                </td>

                                <td>
                                    <input type="email" class="form-control form-control-sm" required id="email">
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div>
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
                            <!-- <tr>
                                <td>
                                    <label for="order-number" class="col-form-label col-form-label-sm" disabled>Order
                                        Number:</label>
                                </td>

                                <td class="text-secondary small  text-right">
                                    <input type="number" class="form-control form-control-sm" disabled id="order-number" value="2">
                                </td>
                            </tr> -->
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="card-footer text-right">
        <button type="submit" class="btn btn-primary"> <i class="fas fa-save"></i>
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

    document.querySelector('form').addEventListener('submit', e => {
        e.preventDefault()

    })
</script>
</body>

</html>