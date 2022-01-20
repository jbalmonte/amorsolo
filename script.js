function handleQtyChange(id, unitPrice, qty) {
    const price = unitPrice * qty
    const total = document.querySelector('#total')
    document.querySelector(`#${id}`).textContent = price.toFixed(2)
    total.value = (+total.value + price).toFixed(2)
}

