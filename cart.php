<?php
    require_once "includes/functions/database.php";

    $db = db_connect();
    $product = db_query($db, "select * from product p where product_id = " .$_GET['product_id']);
?>

<?php require_once "includes/layouts/shared/header.php" ?>



<?php require_once "includes/layouts/shared/footer.php" ?>
<?php pg_close($db); ?>