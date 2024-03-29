let CART;
if (JSON.parse(localStorage.getItem('shoppingCart')) != null) {
    CART = (JSON.parse(localStorage.getItem('shoppingCart')));
} else {
    CART = [];
}

function initCartButtonListeners() {
    const BUTTONS = $('[data-cart-button="add-to-cart"]');
    for (let button of BUTTONS) {
        $(button).click(function() {
            event.preventDefault();
            addToCart(event.target.closest("[data-product-id]").getAttribute("data-product-id"), event.target.closest("[data-product-name]").getAttribute("data-product-name"), event.target.closest("[data-product-image]").getAttribute("data-product-image"), event.target.closest("[data-product-price]").getAttribute("data-product-price"), document.querySelector('[data-quantity-input]').value);
        });
    }
}

function addToCart(product_id, name, imageUrl, price, quantity) {
    let product;
    let productAlreadyExists = false;
    if (quantity != null) {
        product = {
            id : product_id,
            name: name,
            image : imageUrl,
            price : price,
            quantity : quantity
        }
    } else {
         product = {
            id : product_id,
            name: name,
            image : imageUrl,
            price : price,
            quantity : 1
        }
    }
    
    for (let item of CART) {
        if (item.id === product_id) {
            productAlreadyExists = true;
        }
    }

    if (quantity != null) {
        if (productAlreadyExists) {
            let index = CART.findIndex(object => {
                return object.id === product_id;
            });
    
            CART[index].quantity = parseInt(parseInt(CART[index].quantity) + parseInt(quantity));
        } else {
            CART.push(product);
        }
    } else {
        if (productAlreadyExists) {
            let index = CART.findIndex(object => {
                return object.id === product_id;
            });
    
            CART[index].quantity = parseInt(parseInt(CART[index].quantity) + 1);
        } else {
            CART.push(product);
        }
    }

    localStorage.clear();
    localStorage.setItem('shoppingCart', JSON.stringify(CART));
}

initCartButtonListeners();