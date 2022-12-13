<?php
    require_once "includes/functions/database.php";

    $db = db_connect();
    if (empty($_POST['searchInput'])) {
        $products = db_query($db, "select * from product p");
    } else {
        
        $sql = "select * from product where name LIKE ".$_POST['searchInput'];
        $products = db_query($db, $sql);
    }
?>

<?php require_once "includes/layouts/shared/header.php" ?>

<h3 class="title text-center">Shop All</h3>
<div class="content">
    <div class="products">
        <div class="row row-cols-auto justify-content-center">
        <?php
            while ($row = pg_fetch_assoc($products)) {

        ?> 
            
            <div class="col item">
                <div class="row item-info">
                    <a data-product-id="<?=$row['product_id']?>" href="product.php?product_id=<?=$row['product_id']?>">
                        <div class="item-img text-center">
                            <img class="item-img" src="<?=$row['image_url'] ?>" alt="">
                        </div>
                        <div class="item-name">
                            <h5 class="text-center"><?=$row['name']?></h5>
                        </div>
                        <div class="item-description">
                            <p class="item-description text-center"><?=$row['description']?></p>
                        </div>
                        </div>
                        <div class="row">
                            <p class="item-price text-center"><?=$row['price']?> $</p>
                            <div class="add-button text-center">
                            <a data-cart-button="add-to-cart" data-product-id="<?=$row['product_id']?>" data-product-name="<?=$row['name']?>" data-product-image="<?=$row['image_url']?>" data-quantity-input="1" href="">
                                <img src="/public/images/add_to_cart.png" alt="">
                            </a>
                        </div>
                    </a>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
    <?php require_once "includes/layouts/shared/footer.php" ?>
</div>
<?php pg_close($db); ?>