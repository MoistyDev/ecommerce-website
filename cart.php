<?php
    require_once "includes/functions/database.php";

    $db = db_connect();
?>

<?php require_once "includes/layouts/shared/header.php" ?>

<h1 class="text-center title">Your Cart</h1>

<div class="content">
    <div data-cart-body="" class="cart">
        
    </div>
    <?php require_once "includes/layouts/shared/footer.php" ?>
</div>


<?php pg_close($db); ?>