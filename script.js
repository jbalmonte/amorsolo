function selectField(id) {
    return document.querySelector(`#${id}`)
}

function handleQtyChange(id, unitPrice, qty) {
    const price = unitPrice * qty
    selectField(id).value = price.toFixed(1)
    computeTotal()
}

function computeTotal() {
    const products = ['rice', 'egg', 'tuna', 'fried-fish', 'noodles', 'ice-cream', 'yogurt', 'potato-chips', 'water', 'softdrinks']
    let total = 0;

    for (let product of products) {
        total += +document.querySelector(`#${product}`).value
    }

    //assigned the computed total to totalField
    selectField('total').value = total.toFixed(1)
}

function myReset() {
    const fields = ['name', 'address', 'contact-number', 'email']
    for (let field of fields) {
        selectField(field).value = ""
    }
}

selectField('order-form').addEventListener('submit', e => {

})