if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {
    var removeSelectedItems = document.getElementsByClassName('btn-remove')
    for (var i = 0; i < removeSelectedItems.length; i++) {
        var button = removeSelectedItems[i]
        button.addEventListener('click', removeItem)
    }
    var artButton = document.getElementsByClassName('art-button')
    for (var i = 0; i < artButton.length; i++) {
        var button = artButton[i]
        button.addEventListener('click', addToCart)
    }

    document.getElementsByClassName('btn-checkout')[0].addEventListener('click', checkoutClicked)
}

function checkoutClicked() {
    alert('Thank you for shopping with us!')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    while (cartItems.hasChildNodes()) {
        cartItems.removeChild(cartItems.firstChild)
    }
    totalPrice()
}

function removeItem(event) {
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
    totalPrice()
}

function addToCart(event) {
    var button = event.target
    var cartItem = button.parentElement.parentElement
    var title = cartItem.getElementsByClassName('art-title')[0].innerText
    var price = cartItem.getElementsByClassName('art-price')[0].innerText
    var imageSrc = cartItem.getElementsByClassName('art-image')[0].src
    addToCartCheckout(title, price, imageSrc)
    totalPrice()
}

function addToCartCheckout(title, price, imageSrc) {
    var checkoutRow = document.createElement('div')
    checkoutRow.classList.add('cart-row')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == title) {
            alert('The selected item is in the cart!!!')
            return
        }
    }
    var cartRowContents = `
        <div class="cart-item cart-column">
            <img class="cart-item-image" src="${imageSrc}" width="100" height="100">
            <span class="cart-item-title">${title}</span>
        </div>
        <span class="cart-price cart-column">${price}</span>
        <div class="cart-column">
            <button class="btn btn-remove" type="button">DELETE</button>
        </div>`
    checkoutRow.innerHTML = cartRowContents
    cartItems.append(checkoutRow)
    checkoutRow.getElementsByClassName('btn-remove')[0].addEventListener('click', removeItem)
}

function totalPrice() {
    var cartArtCollection = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartArtCollection.getElementsByClassName('cart-row')
    var total = 0
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var priceItem = cartRow.getElementsByClassName('cart-price')[0]
        var price = parseFloat(priceItem.innerText.replace('€', ''))
        total = total + price
    }
    document.getElementsByClassName('gross-price')[0].innerText = '€' + total
}
