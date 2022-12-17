<?php
    require_once "includes/functions/database.php";

    $db = db_connect();
    
    if (empty($_POST['searchInput'])) {
        $products = db_query($db, "select * from product p");
    } else {
        $search = $_POST['searchInput'];
        $searchLower = strtolower($search);
        $searchUpper = strtoupper($search);
        $sql = "select * from product where name ^@ '{$search}' or lower(name) ^@ '{$searchLower}' or upper(name) ^@ '{$searchUpper}'";
        $products = db_query($db, $sql);
    }
?>

<?php require_once "includes/layouts/shared/header.php" ?>
<div class="content">
    <?php require_once "includes/layouts/shared/navbar.php" ?>
    <h3 class="title text-center">Shop All</h3>
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
                        <a data-cart-button="add-to-cart" data-product-id="<?=$row['product_id']?>" data-product-name="<?=$row['name']?>" data-product-image="<?=$row['image_url']?>" data-product-price="<?=$row['price']?>" data-quantity-input="1" href="">
                            <div class="row">
                                <p class="item-price text-center"><?=$row['price']?> $</p>
                                <div class="add-button text-center">
                                <img src="/public/images/add_to_cart.png" alt="">
                            </div>
                        </a>
                    </a>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
    <?php require_once "includes/layouts/shared/footerbar.php" ?>
</div>
<?php require_once "includes/layouts/shared/footer.php" ?>
<?php pg_close($db); ?>