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
    <?php require_once "includes/layouts/shared/navbar.php" ?>
    
    <div class="row">
        <div class="col">
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
                            <a href="product.php?product_id=<?=$row['product_id']?>">
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
        </div>
        <div class="col">
            <h3 class="title brand-title text-center">Our Top Brands</h3>
            <div class="top-brands d-flex">
                <div class="col brands text-center justify-content-center">
                    <div class="row justify-content-center">
                        <a href="">
                            <img class="brand-logo" src="/public/images/hagen-tr.png" alt="">
                        </a>
                    </div>
                    <div class="row">
                        <a href="">
                            <img class="brand-logo" src="/public/images/higgins-tr.png" alt="">
                        </a>
                    </div>
                    <div class="row">
                        <a href="">
                            <img class="brand-logo" src="/public/images/zoo-max-tr.png" alt="">
                        </a>
                    </div>
                    <div class="row">
                        <a href="">
                            <img class="brand-logo" src="/public/images/puur-tr.png" alt="">
                        </a>
                    </div>
                    <div class="row">
                        <a href="">
                            <img class="brand-logo" src="/public/images/lafeber.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once "includes/layouts/shared/footerbar.php" ?>
</div>
<?php require_once "includes/layouts/shared/footer.php" ?>
<?php pg_close($db); ?>