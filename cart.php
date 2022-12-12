<?php
    require_once "includes/functions/database.php";

    $db = db_connect();
?>

<?php require_once "includes/layouts/shared/header.php" ?>

<div class="content">
    <div data-cart-body="" class="cart">
        
    </div>
</div>

<?php require_once "includes/layouts/shared/footer.php" ?>
<?php pg_close($db); ?>