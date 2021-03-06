function selectField(id) {
    return document.querySelector(`#${id}`)
}

function handleQtyChange(id, unitPrice, qty) {
    const price = unitPrice * qty;
    selectField(id).value = price.toFixed(1);
    computeTotal();
}

function computeTotal() {
    const products = ['rice', 'egg', 'tuna', 'fried-fish', 'noodles', 'ice-cream', 'yogurt', 'potato-chips', 'water', 'softdrinks']
    let total = 0;

    for (let product of products) {
        total += +document.querySelector(`#${product}`).value
    }

    //assign the computed total to totalField
    selectField('total').value = total.toFixed(1)
}

function myReset() {
    const fields = ['name', 'address', 'contact-number', 'email']
    for (let field of fields) {
        selectField(field).value = ""
    }
}

selectField('order-form-btn')?.addEventListener('click', e => {
    //filter not selected item
    let emptyInputLength = 0
    for (let quantity of document.querySelectorAll('#order-form input[name^=quantity]')) {
        if (!quantity.value) {
            emptyInputLength += 1
            const id = quantity.name.match(/\d+/) + "";
            const emptyFields = document.querySelectorAll(`#order-form input[name$="${id}"]`)
            emptyFields.forEach(x => x.disabled = true)
        }
    }
    if (emptyInputLength !== 10) $('#order-confirmation-modal').modal({ show: true });
    else selectField('order-form').submit()
})

selectField('order-confirmation-modal-btn')?.addEventListener('click', () => selectField('order-form').submit())


//prevent form resubmission
if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}
