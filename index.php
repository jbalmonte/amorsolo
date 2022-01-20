<?php 
include 'includes/header.php'
?>

<div class="card my-5 mx-auto shadow-sm" style="max-width: 80%;">
    <div class="card-header text-light bg-secondary text-center">
        <i class="fas fa-pen-alt"></i> ORDER FORM
    </div>
    <div class="card-body bg-light">
        <form class="form">
            <div class="card mt-4">
                <div class="card-header text-info">

                    <i class="fas fa-utensils"></i>
                    Products to Order
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-responsive-md">
                        <thead class="bg-secondary text-light">
                            <tr class="text-center">
                                <th>Unit</th>
                                <th>Quantity</th>
                                <th>Product Code</th>
                                <th>Description</th>
                                <th>Unit Price</th>
                                <th>Total Price</th>
                            </tr>
                        </thead>

                        <tbody class="bg-light">
                            <tr>
                                <td class="col-1"> <input type="number" class="form-control form-control-sm"> </td>
                                <td class="col-1"> <input type="number" class="form-control form-control-sm"> </td>
                                <td class="col-2"> <input type="text" class="form-control form-control-sm"> </td>
                                <td class="col-4"> <input type="description" class="form-control form-control-sm">
                                </td>
                                <td class="col-2"> <input type="number" class="form-control form-control-sm"> </td>
                                <td class="col-2"> <input type="number" class="form-control form-control-sm"> </td>
                            </tr>
                            <tr>
                                <td class="col-1"> <input type="number" class="form-control form-control-sm"> </td>
                                <td class="col-1"> <input type="number" class="form-control form-control-sm"> </td>
                                <td class="col-2"> <input type="text" class="form-control form-control-sm"> </td>
                                <td class="col-4"> <input type="description" class="form-control form-control-sm">
                                </td>
                                <td class="col-2"> <input type="number" class="form-control form-control-sm"> </td>
                                <td class="col-2"> <input type="number" class="form-control form-control-sm"> </td>
                            </tr>
                            <tr>
                                <td class="col-1"> <input type="number" class="form-control form-control-sm"> </td>
                                <td class="col-1"> <input type="number" class="form-control form-control-sm"> </td>
                                <td class="col-2"> <input type="text" class="form-control form-control-sm"> </td>
                                <td class="col-4"> <input type="description" class="form-control form-control-sm">
                                </td>
                                <td class="col-2"> <input type="number" class="form-control form-control-sm"> </td>
                                <td class="col-2"> <input type="number" class="form-control form-control-sm"> </td>
                            </tr>
                            <tr>
                                <td class="col-1"> <input type="number" class="form-control form-control-sm"> </td>
                                <td class="col-1"> <input type="number" class="form-control form-control-sm"> </td>
                                <td class="col-2"> <input type="text" class="form-control form-control-sm"> </td>
                                <td class="col-4"> <input type="description" class="form-control form-control-sm">
                                </td>
                                <td class="col-2"> <input type="number" class="form-control form-control-sm"> </td>
                                <td class="col-2"> <input type="number" class="form-control form-control-sm"> </td>
                            </tr>
                            <tr>
                                <td class="col-1"> <input type="number" class="form-control form-control-sm"> </td>
                                <td class="col-1"> <input type="number" class="form-control form-control-sm"> </td>
                                <td class="col-2"> <input type="text" class="form-control form-control-sm"> </td>
                                <td class="col-4"> <input type="description" class="form-control form-control-sm">
                                </td>
                                <td class="col-2"> <input type="number" class="form-control form-control-sm"> </td>
                                <td class="col-3"> <input type="number" class="form-control form-control-sm"> </td>
                            </tr>
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
                                <input type="number" name="total" id="total" class="form-control">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success"> <i class="far fa-paper-plane"></i>
                        Submit</button>
                    <button type="reset" class="btn btn-danger"> <i class="fas fa-redo"></i> Reset</button>
                </div>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
    </body>

    </html>