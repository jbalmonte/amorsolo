<?php
include 'includes/components/header.php';
include 'includes/components/modal.php';
include 'includes/utils/check-fields.php';

// unset($_POST);
var_dump($_POST);
// action="./includes/request/customer.php"
?>


<form class="card my-5 mx-auto shadow-sm" onsubmit="return false" method="POST" id="customer-form" style="max-width: 50%;">
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
                                <input type="text" name="name" class="form-control form-control-sm" required id="name">
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
                                <input type="text" name="address" class="form-control form-control-sm" required id="address">
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
                                <input type="text" name="contact-numer" class="form-control form-control-sm" required id="contact-number">
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
                                <input type="email" name="email" class="form-control form-control-sm" required id="email">
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

        <button type="submit" name="submitForm" value="submitForm" onclick="return false;" id="save-btn" class="btn btn-primary"> <i class="fas fa-save"></i>
            Save</button>
        <button type="button" id="reset-btn" onclick="myReset()" class="btn btn-danger"> <i class="fas fa-redo"></i> Reset</button>

        <button type="button" class="btn btn-primary d-none" id="next-btn"> Next <i class="fas fa-chevron-right"></i>
        </button>
    </div>
</form>


<script>
    function selectField(id) {
        return document.querySelector(`#${id}`)
    }

    function myReset() {
        const fields = ['name', 'address', 'contact-number', 'email']
        for (let field of fields) {
            selectField(field).value = ""
        }
    }


    selectField('save-btn').addEventListener('click', e => {
        // e.preventDefault()
        $('#customer-info-msg').modal({
            show: true
        })
    })

    selectField('modal-btn').addEventListener('click', e => {
        // selectField('save-btn').classList.add('d-none')
        // selectField('reset-btn').classList.add('d-none')
        // selectField('next-btn').classList.remove('d-none')

        // for (let id of ['name', 'address', 'contact-number', 'email']) {
        //     selectField(id).disabled = true
        // }
        selectField('customer-form').submit()
        // console.log(selectField('customer-form'));
    })
</script>
</body>

</html>