<?php
    require_once "includes/functions/database.php";

    $db = db_connect();
?>

<?php require_once "includes/layouts/shared/header.php" ?>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand text-center" href="/index.php">Kiwi's Supply Shop - Order Confirmation</a>
  </div>
</nav>

<div class="content">
    <div class="col align-middle">
        <div class="row">
            <h1 class="question text-center">You are sure you want to order ?</h1>   
        </div>
        <div class="row">
            <div class="col text-end">
                <form action="orderConfirmed.php" method="post">
                    <button type="submit" name="submit" data-option="confirm" class="btn confirm-option confirm" value="Confirm"><h3>Confirm</h3></button>
                </form>
            </div>
            <div class="col">
                <a href="index.php">
                    <h3 type="button" data-option="cancel" class="confirm-option cancel">Cancel</h3>
                </a>
            </div>
        </div>
    </div>    

    <?php require_once "includes/layouts/shared/footer.php"?>
    <?php pg_close($db); ?>
</div>