let CART;
if (JSON.parse(localStorage.getItem('shoppingCart')) != null) {
    CART = (JSON.parse(localStorage.getItem('shoppingCart')));
} else {
    CART = [];
}

function initCartButtonListeners() {
    const BUTTONS = document.querySelectorAll('[data-cart-button="add-to-cart"]');
    for (let button of BUTTONS) {
        button.addEventListener('click', function() {
            event.preventDefault();
            addToCart(event.target.closest("[data-product-id]").getAttribute("data-product-id"), event.target.closest("[data-product-name]").getAttribute("data-product-name"), event.target.closest("[data-product-image]").getAttribute("data-product-image"), document.querySelector('[data-quantity-input]').value);
        });
    }
}

function addToCart(product_id, name, imageUrl, quantity) {
    console.log(parseInt(quantity));
    let product;
    let productAlreadyExists = false;
    if (quantity != null) {
        product = {
            id : product_id,
            productName: name,
            image : imageUrl,
            quantityOfProduct : quantity
        }
    } else {
         product = {
            id : product_id,
            productName: name,
            image : imageUrl,
            quantityOfProduct : 1
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
    
            CART[index].quantityOfProduct = parseInt(parseInt(CART[index].quantityOfProduct) + parseInt(quantity));
        } else {
            CART.push(product);
        }
    } else {
        if (productAlreadyExists) {
            let index = CART.findIndex(object => {
                return object.id === product_id;
            });
    
            CART[index].quantityOfProduct = parseInt(parseInt(CART[index].quantityOfProduct) + 1);
        } else {
            CART.push(product);
        }
    }

    localStorage.setItem('shoppingCart', JSON.stringify(CART));
}

initCartButtonListeners();