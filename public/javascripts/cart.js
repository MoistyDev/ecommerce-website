let CART;
if (JSON.parse(localStorage.getItem('shoppingCart')) != null) {
    CART = (JSON.parse(localStorage.getItem('shoppingCart')));
} else {
    CART = [];
}

let htmlElem = document.querySelector('[data-cart-body]');
htmlElem.innerHTML = "";

function initRemoveListeners() {
    const BUTTONS = document.querySelectorAll('[data-cart-button="remove-from-cart"]');
    for (let button of BUTTONS) {
        button.addEventListener('click', function() {
            removeProduct(event.target.closest("[data-product-id]").getAttribute("data-product-id"))
        });
    }
}

function initQuantityInputListeners() {
    const FIELDS = document.querySelectorAll(['[data-quantity-input]']);
    for (let field of FIELDS) {
        field.addEventListener("change", function() {
            console.log(event.target.closest("[data-product-id]"));
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

    console.log(index);
    CART.splice(index, 1);
    localStorage.setItem('shoppingCart', JSON.stringify(CART));
}

function addProducts() {
    for (let product of CART) {
        htmlElem.innerHTML += `
        <div class="product cart-product justify-content-center">
            <div class="row">
                <div class="col-3 product-image">
                    <img class="cart-img" src="${product.image}" alt="">
                </div>
                <div class="col align-self-center">
                    <div class="row">
                        <h5 class="text-center">${product.name}</h5>
                    </div>
                    <div class="row shopping-options">
                        <div class="col-3 quantity-to-buy">
                            <label for="quantity">Quantity :</label>
                            <input data-product-id="${product.id}" data-quantity-input="" type="number" class="quantity" name="quantity" min="1" value="${product.quantity}"> 
                        </div>
                        <div class="col-3 text-center cart-button remove-from-cart">
                            <a data-cart-button="remove-from-cart" data-product-id="${product.id}" data-product-name="${product.name}" data-product-image="${product.image}" data-product-price="${product.price}" data-product-quantity="1" href="" >
                                <img src="/public/images/remove_from_cart.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        `;
    }
}

addProducts();
initRemoveListeners();
initQuantityInputListeners();
