let CART;
if (JSON.parse(localStorage.getItem('shoppingCart')) != null) {
    CART = (JSON.parse(localStorage.getItem('shoppingCart')));
} else {
    CART = [];
}

let htmlElem = document.querySelector('[data-cart-body]');
htmlElem.innerHTML = "";


for (let product of CART) {
    htmlElem.innerHTML += `
    <div class="product justify-content-center">
        <div class="row">
            <div class="col-3 product-image">
                <img class="cart-img" src="${product.image}" alt="">
            </div>
            <div class="col align-self-center">
                <div class="row">
                    <h5 class="text-center">${product.productName}</h5>
                </div>
                <div class="row shopping-options">
                    <div class="col-3 quantity-to-buy">
                        <label for="quantity">Quantity :</label>
                        <input data-quantity-input="" type="number" class="quantity" name="quantity" min="1" value="${product.quantityOfProduct}"> 
                    </div>
                    <div class="col-3 text-center cart-button remove-from-cart">
                        <a data-cart-button="remove-from-cart" data-product-id="<?=$row['product_id']?>" data-product-name="<?=$row['name']?>" data-product-image="<?=$row['image_url']?>" data-product-quantity="1" href="" >
                            <img src="/public/images/remove_from_cart.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    `;
}

