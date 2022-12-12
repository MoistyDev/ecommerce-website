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
            <div class="col-6 image">
                <img class="" src="<?=$row['image_url'] ?>" alt="">
            </div>
            <div class="col info">
                <div class="row">
                    <h2 class="name text-center"><?=$row['name']?></h2>
                </div>
                <div class="row">
                    <h5 class="description text-center"><?=$row['description']?></h5>
                </div>
                <div class="row shopping-options">
                    <div class="col-3 quantity-to-buy">
                        <label for="quantity">Quantity :</label>
                        <input data-quantity-input="" type="number" class="quantity" name="quantity" min="1" value="1"> 
                    </div>
                    <div class="col-3 text-center cart-button add-to-cart">
                        <a data-cart-button="add-to-cart" data-product-id="<?=$row['product_id']?>" data-product-name="<?=$row['name']?>" data-product-image="<?=$row['image_url']?>" data-product-quantity="1" href="" >
                            <img src="/public/images/add_to_cart.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<?php require_once "includes/layouts/shared/footer.php" ?>
<?php pg_close($db); ?>