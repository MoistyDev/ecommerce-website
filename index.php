<?php
    require_once "includes/functions/database.php";

    $db = db_connect();
    $products = db_query($db, 
    "select * from product p 
    join top_product tp on tp.product_id = p.product_id 
    where p.product_id in (select * from top_product)");
?>

<?php require_once "includes/layouts/shared/header.php" ?>

<div class="content">
    <h3 class="title text-center">Our top sellers</h3>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <?php
            while($row = pg_fetch_assoc($products)) {
        ?>
            <div class="carousel-item <? if ($row['product_id'] == 1) echo "active"?>">
                <a href="">
                    <img src="<?=$row['image_url'] ?>" alt="...">
                </a>
                <div class="carousel-caption d-none d-md-block">
                    <h5><?=$row['name']?></h5>
                </div>
            </div>
        <?php } ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>

    <h5 class="title text-center">Our Top Brands</h5>
    <div class="top-brands d-flex justify-content-around">
        <div class="row brands">
            <div class="col">
                <a href="">
                    <img class="brand-logo" src="/public/images/hagen-tr.png" alt="">
                </a>
            </div>
            <div class="col">
                <a href="">
                    <img class="brand-logo" src="/public/images/higgins-tr.png" alt="">
                </a>
            </div>
            <div class="col">
                <a href="">
                    <img class="brand-logo" src="/public/images/zoo-max-tr.png" alt="">
                </a>
            </div>
            <div class="col">
                <a href="">
                    <img class="brand-logo" src="/public/images/puur-tr.png" alt="">
                </a>
            </div>
            <div class="col">
                <a href="">
                    <img class="brand-logo" src="/public/images/roudybush-tr.png" alt="">
                </a>
            </div>
            <div class="col">
                <a href="">
                    <img class="brand-logo" src="/public/images/lafeber.png" alt="">
                </a>
            </div>
        </div>
    </div>
</div>

<?php require_once "includes/layouts/shared/footer.php" ?>
<?php pg_close($db); ?>