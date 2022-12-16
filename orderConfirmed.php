<?php
    require_once "includes/functions/database.php";
/*
    id
    productName
    image
    quantityOfProduct
*/
    $db = db_connect();
    $orderId = $_GET['orderID'];
    $cart = json_decode($_POST["cart"]);
    foreach($cart as $product) {
        $productId = $product->id;
        $name = $product->name;
        $price = $product->price;
        $quantity = $product->quantity;
        $insertProduct = "insert into order_item (price, name, quantity, order_id, product_id) values ((select price from product where product_id = {$productId}), '{$name}', {$quantity}, {$orderId}, {$productId})";
        db_query($db, $insertProduct);
    }
?>

<?php require_once "includes/layouts/shared/header.php" ?>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand text-center" href="/index.php">Kiwi's Supply Shop - Order #<?=$orderId?> Confirmed</a>
  </div>
</nav>
<div class="content">
    
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
<?php pg_close($db); ?>