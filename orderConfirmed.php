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
    <a class="navbar-brand" href="/index.php">Kiwi's Supply Shop - Order #<?=$orderId?> Confirmed</a>
  </div>
</nav>
<div class="content">

<?php require_once "includes/layouts/shared/footerbar.php" ?>
</div>
<?php require_once "includes/layouts/shared/footer.php" ?>
<?php pg_close($db); ?>