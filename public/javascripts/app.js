let CART;
if (JSON.parse(localStorage.getItem('shoppingCart')) != null) {
    CART = new Map(JSON.parse(localStorage.getItem('shoppingCart')));
} else {
    CART = new Map ();
}

function initCartButtonListeners() {
    const BUTTONS = document.querySelectorAll('[data-cart-button="add-to-cart"]');
    for (let button of BUTTONS) {
        button.addEventListener('click', function() {
            event.preventDefault();
            addToCart(event.target.closest("[data-product-id]").getAttribute("data-product-id"), document.querySelector('[data-quantity-input]').value);
        });
    }
}

function addToCart(product_id, quantity) {
    console.log(parseInt(quantity));
    if (quantity != null) {
        if (CART.has(parseInt(product_id))) {
            CART.set(parseInt(product_id), parseInt(CART.get(parseInt(product_id)) + parseInt(quantity)));
        } else {
            CART.set(parseInt(product_id), parseInt(quantity));
        }
    } else {
        if (CART.has(parseInt(product_id))) {
            CART.set(parseInt(product_id), parseInt(CART.get(parseInt(product_id)) + 1));
        } else {
            CART.set(parseInt(product_id), parseInt(1));
        }
    }
    localStorage.clear();
    localStorage.setItem('shoppingCart', JSON.stringify(Array.from(CART.entries())));
}

function loadCartElements() {
    
}

initCartButtonListeners();