let CART;
if (JSON.parse(localStorage.getItem('shoppingCart')) != null) {
    CART = (JSON.parse(localStorage.getItem('shoppingCart')));
} else {
    CART = [];
}

let htmlElem = $('[data-cart-body]');
$(htmlElem).html("");

function initRemoveListeners() {
    const BUTTONS = $('[data-cart-button="remove-from-cart"]');
    for (let button of BUTTONS) {
        $(button).click(function() {
            removeProduct(event.target.closest("[data-product-id]").getAttribute("data-product-id"))
        });
    }
}

function initQuantityInputListeners() {
    const FIELDS = $(['[data-quantity-input]']);
    for (let field of FIELDS) {
        $(field).change(function() {
            let index = CART.findIndex(object => {
                return object.id === event.target.closest("[data-product-id]").getAttribute("data-product-id");
            });
            CART[index].quantityOfProduct = field.value;
            localStorage.setItem('shoppingCart', JSON.stringify(CART));
        });
    }
}

function removeProduct(productId) {
    let index = CART.findIndex(object => {
        return object.id === productId;
    });

    CART.splice(index, 1);
    localStorage.setItem('shoppingCart', JSON.stringify(CART));
}

function addProducts() {
    if (CART.length == 0) {
        htmlElem.innerHTML += `<h3 class="empty-cart-message d-flex align-items-center justify-content-center">Your cart is empty</h3>`
    } else {
        for (let product of CART) {
            if (CART.indexOf(product) == CART.length - 1) {
                htmlElem.innerHTML += `
                <div class="product cart-product justify-content-center">
                    <div class="row">
                        <div class="col product-image d-flex justify-content-center">
                            <img class="cart-img" src="${product.image}" alt="">
                        </div>
                        <div class="col align-self-center">
                            <div class="row name cart-product-name">
                                <h5 class="text-center">${product.name}</h5>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="input-group quantity-to-buy">
                                    <span class="input-group-text" id="">Quantity</span>
                                    <input class="form-control" data-product-id="${product.id}" data-quantity-input="" type="number" class="quantity" name="quantity" min="1" value="${product.quantity}"> 
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <a class="cart-button remove-from-cart text-center" data-cart-button="remove-from-cart" data-product-id="${product.id}" data-product-name="${product.name}" data-product-image="${product.image}" data-product-price="${product.price}" data-product-quantity="1" href="" >
                                    <img src="/public/images/remove_from_cart.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="checkout-link" href="form.php">
                    <div class="buy-button cart-button checkout">
                        <h5>Checkout</h5>
                    </div>
                </a>
                `
            } else {
                htmlElem.innerHTML += `
                <div class="product cart-product justify-content-center">
                    <div class="row">
                        <div class="col product-image d-flex justify-content-center">
                            <img class="cart-img" src="${product.image}" alt="">
                        </div>
                        <div class="col align-self-center">
                            <div class="row name cart-product-name">
                                <h5 class="text-center">${product.name}</h5>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="input-group quantity-to-buy">
                                    <span class="input-group-text" id="">Quantity</span>
                                    <input class="form-control" data-product-id="${product.id}" data-quantity-input="" type="number" class="quantity" name="quantity" min="1" value="${product.quantity}"> 
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <a class="cart-button remove-from-cart text-center" data-cart-button="remove-from-cart" data-product-id="${product.id}" data-product-name="${product.name}" data-product-image="${product.image}" data-product-price="${product.price}" data-product-quantity="1" href="" >
                                    <img src="/public/images/remove_from_cart.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                `;
            }
        }
    }
}

addProducts();
initRemoveListeners();
initQuantityInputListeners();
