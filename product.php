<?php
    require_once "includes/functions/database.php";

    $db = db_connect();
    $product = db_query($db, "select * from product p where product_id = " .$_GET['product_id']);
?>

<?php require_once "includes/layouts/shared/header.php" ?>

<?php $row = pg_fetch_assoc($product) ?>

<div class="content">
    <div class="product">
        <div class="row">
            <div class="col">
                <img class="item-img" src="<?=$row['image_url'] ?>" alt="">
            </div>
            <div class="col">
                <h2 class="text-center"><?=$row['name']?></h2>
            </div>
        </div>
    </div>
    
</div>

<?php require_once "includes/layouts/shared/footer.php" ?>
<?php pg_close($db); ?>