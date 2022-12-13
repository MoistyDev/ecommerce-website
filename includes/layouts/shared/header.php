<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique en ligne</title>
    <link rel="stylesheet" href="./public/stylesheets/styles.css">
    <link rel="stylesheet" href="./public/stylesheets/product.css">
    <link rel="stylesheet" href="./public/stylesheets/cart.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script type="module" src="./public/javascripts/app.js"></script>

    <?php
      if ($_SERVER['REQUEST_URI'] == '/cart.php') echo '<script type="module" src="./public/javascripts/cart.js"></script>'
    ?>

</head>
<body>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="/index.php">Kiwi's Supply Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <div class="home navbar-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </div>
        <div class="shop navbar-item">
          <a class="nav-link" href="/shop.php">Shop</a>
        </div>
      </div>
      <div class="search-bar navbar-item">
        <form action="shop.php?search=searchInput" method="POST" class="input-group">
          <input name="searchInput" type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
          <button name="submit" type="submit" class="btn btn-outline-primary">search</button>
        </form>
      </div>
      <div class="cart navbar-item">
          <a class="shopping-cart-logo" href="/cart.php">
            <img src="/public/images/shopping_cart.png" alt="">
          </a>
      </div>
    </div>
  </div>
</nav>

<?php
  if(isset($_POST['submit'])) {
    $search = $_POST['searchInput'];
    $url = "shop.php?search=".$search;
  }
?>
