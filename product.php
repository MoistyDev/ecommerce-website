<?php
    require_once "includes/functions/database.php";

    $db = db_connect();
    $product = db_query($db, "select * from product p where product_id = " .$_GET['product_id']);
?>
<?php require_once "includes/layouts/shared/header.php" ?>
<?php $row = pg_fetch_assoc($product) ?>

<div class="content">
    <?php require_once "includes/layouts/shared/navbar.php" ?>
    <div class="product">
        <div class="row">
            <div class="col image d-flex justify-content-center">
                <img class="" src="<?=$row['image_url'] ?>" alt="">
            </div>
            <div class="col info">
                <div class="row">
                    <h2 class="name text-center"><?=$row['name']?></h2>
                </div>
                <div class="row">
                    <h5 class="description text-center"><?=$row['description']?></h5>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="input-group quantity-to-buy">
                        <span class="input-group-text" id="">Quantity</span>
                        <input class="form-control" data-quantity-input="" type="number" class="quantity" name="quantity" min="1" value="1"> 
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <a class="cart-button add-to-cart text-center" data-cart-button="add-to-cart" data-product-id="<?=$row['product_id']?>" data-product-name="<?=$row['name']?>" data-product-image="<?=$row['image_url']?>" data-product-price="<?=$row['price']?>" data-product-quantity="1" href="" >
                        Add to cart
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php require_once "includes/layouts/shared/footerbar.php" ?>
</div>
<?php require_once "includes/layouts/shared/footer.php" ?>

<?php pg_close($db); ?>