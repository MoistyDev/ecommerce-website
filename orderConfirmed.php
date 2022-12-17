<?php
    require_once "includes/functions/database.php";

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
<div class="content">
  <?php require_once "includes/layouts/shared/navbar.php" ?>
  <div class="confirmed-order d-flex flex-column align-items-center justify-content-center">
    <h3 class="title order-confirmation text-center">Order #<?=$orderId?> Confirmed !</h3>
    <a data-redirect-button="homepage" class="homepage-button align-middle text-center " href="index.php"><h5>Go back to homepage</h5></a>
  </div>
  <?php require_once "includes/layouts/shared/footerbar.php" ?>
</div>
<?php require_once "includes/layouts/shared/footer.php" ?>
<?php pg_close($db); ?>