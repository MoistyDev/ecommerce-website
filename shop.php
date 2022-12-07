<?php
    require_once "includes/functions/database.php";

    $db = db_connect();
    $products = db_query($db, "select * from product p");
?>

<?php require_once "includes/layouts/shared/header.php" ?>

<h3 class="title text-center">Shop All</h3>
<div class="content">
    <div class="products">
        <div class="row row-cols-auto">
        <?php
            while ($row = pg_fetch_assoc($products)) {

        ?> 
            <a href="product.php?product_id=<?=$row['product_id']?>">
                <div class="col item">
                    <div class="row item-info">
                        <div class="item-img text-center">
                            <img class="item-img" src="<?=$row['image_url'] ?>" alt="">
                        </div>
                        <div class="item-name">
                            <h5 class="text-center"><?=$row['name']?></h5>
                        </div>
                        <div class="item-description">
                            <p class="item-description text-center"><?=$row['description']?></p>
                        </div>
                        <div class="item-price">
                            <p class="text-center"><?=$row['price']?> $</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="add-button text-center">
                        <a href="">
                            <img src="/public/images/add_to_cart.png" alt="">
                        </a>
                    </div>
                    </div>
                </div>
            </a>
        <?php } ?>
        </div>
    </div>
</div>

<?php require_once "includes/layouts/shared/footer.php" ?>
<?php pg_close($db); ?>