let CART;
if (JSON.parse(localStorage.getItem('shoppingCart')) != null) {
    CART = (JSON.parse(localStorage.getItem('shoppingCart')));
} else {
    CART = [];
}

$('a[data-option="confirm"]').click(function() {
    $.ajax({     
        url: "/student-web/students/create",
        type: "POST",
        data: {cart : CART},
        success: function(){ console.log("data sent") },
        error: function() { console.log("data not sent") },
        dataType: 'json',
        contentType : 'application/json',
        processData: false
    });
});
console.log(JSON.stringify(CART));