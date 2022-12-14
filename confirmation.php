<?php
    require_once "includes/functions/database.php";

    $db = db_connect();
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $postalcode = $_POST['postalcode'];
    $url = "orderConfirmed.php?firstname=$firstname&lastname=$lastname&email=$email&country=$country%address=$address&city=$city%postalcode=$postalcode";
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
            <div class="col">
                <a data-option="confirm" class="confirm-option-link text-end" href="<?=$url?>">
                    <h3 class="confirm-option confirm">Confirm</h3>
                </a>
            </div>
            <div class="col">
                <a class="confirm-option-link text-start" href="index.php">
                    <h3 class="confirm-option cancel">Cancel</h3>
                </a>
            </div>
        </div>
    </div>    

    <?php require_once "includes/layouts/shared/footer.php" ?>
    <?php pg_close($db); ?>
</div>