let CART = new Map(JSON.parse(localStorage.shoppingCart));

function initCartButtonListeners() {
    const BUTTONS = document.querySelector('data-add-cart');
    for (button of BUTTONS) {
        button.addEventListener('click', addToCart(e.target.getAttribute("data-product-id")));
    }
}

function addToCart(product_id) {
    CART.set(product_id)
    localStorage.clear();
    localStorage.shoppingCart = JSON.stringify(Array.from(CART.entries()))
}
