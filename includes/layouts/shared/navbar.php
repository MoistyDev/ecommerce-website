<nav class="navbar navbar-dark navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="/index.php">
      <img src="/public/images/brand-logo.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/shop.php">Shop</a>
        </li>
        <li class="nav-item cart-text">
          <a class="nav-link" href="/cart.php">Cart</a>
        </li>
      </ul>
      <form class="d-flex" role="search" action="shop.php?search=searchInput" method="POST">
        <input class="form-control me-2 search-bar" type="search" placeholder="Search" aria-label="Search" name="searchInput">
        <button class="btn btn-outline-light search-button" type="submit">Search</button>
      </form>
      <span class="cart navbar-text">
          <a class="shopping-cart-logo" href="/cart.php">
            <img src="/public/images/shopping_cart.png" alt="">
          </a>
      </span>
    </div>
  </div>
</nav>

<?php
  if(isset($_POST['submit'])) {
    $search = $_POST['searchInput'];
    $url = "shop.php?search=".$search;
  }
?>