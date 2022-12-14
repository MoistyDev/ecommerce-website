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
        <div class="cart-text navbar-item">
          <a class="nav-link" href="/cart.php">Cart</a>
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