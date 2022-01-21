<?php
include 'includes/header.php'
?>

<form class="card my-5 mx-auto shadow-sm" style="max-width: 55%;">
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
                    <table class="table-sm" id="main-table">
                        <tr>
                            <td>
                                <label for="name" class="col-form-label col-form-label-sm">
                                    Customer Name:</label>
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="name">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label for="address" class=" col-form-label col-form-label-sm">Address:</label>
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="address">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label for="contact-number" class=" col-form-label col-form-label-sm">Contact
                                    Number:</label>
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="contact-number">
                            </td>
                        </tr>


                        </tr>

                        <tr>
                            <td>
                                <label for="email" class=" col-form-label col-form-label-sm">Email:</label>
                            </td>

                            <td>
                                <input type="email" class="form-control form-control-sm" id="email">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label for="order-date" class=" col-form-label col-form-label-sm">Order
                                    Date:</label>
                            </td>

                            <td>
                                <input type="date" class="form-control form-control-sm" id="order-date" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="order-number" class="col-form-label col-form-label-sm" disabled>Order
                                    Number:</label>
                            </td>

                            <td>
                                <input type="number" class="form-control form-control-sm" id="order-number">
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer ml-auto">
        <button type="submit" class="btn btn-primary"> <i class="far fa-paper-plane"></i>
            Save</button>
        <button type="reset" class="btn btn-danger"> <i class="fas fa-redo"></i> Reset</button>
    </div>
</form>
<script>
    document.querySelector('#order-date').value = new Date().toISOString().substring(0, 10)
</script>
</body>

</html>