let CART;
if (JSON.parse(localStorage.getItem('shoppingCart')) != null) {
    CART = (JSON.parse(localStorage.getItem('shoppingCart')));
} else {
    CART = [];
}

function emailIsNew() {
    $('[data-field-type="email"]').blur(function() {
        $.ajax({
            method: "POST",
            url: 'emailVerification.php',
            data: {emailValue: $('[data-field-type="email"]').val()},
        });
    });
}

function loadCartItems() {
    $(document).ready(function() {
        $('[data-page-element="cart"]').val(JSON.stringify(CART));
    });
}

function findTotal() {
    let total = 0;
    for (let item of CART) {
        total += (item.price * item.quantity);
    }
    return total
}

function loadTotal() {
    $(document).ready(function() {
        $('[data-page-element="cartTotal"]').val(findTotal());
    });
}

emailIsNew();
loadCartItems();
loadTotal();