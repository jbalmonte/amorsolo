<?php 
include 'includes/header.php'
?>

<div class="card my-5 mx-auto shadow-sm" style="max-width: 80%;">
    <div class="card-header text-light bg-secondary text-center">
        <i class="fas fa-pen-alt"></i> ORDER FORM
    </div>
    <div class="card-body bg-light">
        <form class="form">
            <div class="card">
                <div class="card-header text-info">
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
                                        <input type="text" class="form-control form-control-sm" id="name">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label for="name" class=" col-form-label col-form-label-sm">Address:</label>
                                    </td>
                                    <td>
                                        <input type="email" class="form-control form-control-sm" id="name">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label for="name" class=" col-form-label col-form-label-sm">Contact
                                            Number:</label>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm" id="name">
                                    </td>

                                </tr>


                                </tr>

                                <tr>
                                    <td>
                                        <label for="name" class=" col-form-label col-form-label-sm">Email:</label>
                                    </td>

                                    <td>
                                        <input type="email" class="form-control form-control-sm" id="name">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label for="date" class=" col-form-label col-form-label-sm">Order
                                            Date:</label>
                                    </td>

                                    <td>
                                        <input type="date" class="form-control form-control-sm" id="order-date" disabled>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="order-number" class="col-form-label col-form-label-sm">Order
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
        </form>
    </div>
    <script src="script.js"></script>
    </body>

    </html>