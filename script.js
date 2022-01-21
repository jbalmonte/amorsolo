function handleQtyChange(id, unitPrice, qty) {
    const price = unitPrice * qty
    document.querySelector(`#${id}`).textContent = price.toFixed(1)
    computeTotal()
}

function computeTotal() {
    const products = ['rice', 'egg', 'tuna', 'fried-fish', 'noodles', 'ice-cream', 'yogurt', 'potato-chips', 'water', 'softdrinks']
    let total = 0;

    for (let product of products) {
        total += +document.querySelector(`#${product}`).textContent
    }

    //assigned the computed total to totalField
    document.querySelector('#total').value = total.toFixed(1)
}
