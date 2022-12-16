<?php
    require_once "includes/functions/database.php";

    $db = db_connect();
?>

<?php require_once "includes/layouts/shared/header.php" ?>

<div class="content">
    <?php require_once "includes/layouts/shared/navbar.php" ?>
    <h1 class="text-center title">Your Cart</h1>
    <div data-cart-body="" class="cart">
        
    </div>

    <a class="checkout-link" href="form.php">
        <div class="buy-button cart-button checkout">
            <h5>Checkout</h5>
        </div>
    </a>

    <?php require_once "includes/layouts/shared/footerbar.php" ?>
</div>
<?php require_once "includes/layouts/shared/footer.php" ?>
<?php pg_close($db); ?>