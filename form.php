<?php
    require_once "includes/functions/database.php";

    $db = db_connect();
?>

<?php require_once "includes/layouts/shared/header.php" ?>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand text-center" href="/index.php">Kiwi's Supply Shop - Billing information</a>
  </div>
</nav>

<div class="container">
    <div class="content">
        <form data-form-element="form-inline" method="post" action="confirmation.php?firstname=firstname&secondname=secondname&email=email&country=country&address=address&city=city&postalcode=postalcode">
            <div class="personal-info">
                <div class="row align-items-center">
                    <h1>Personal Info</h1>
                </div>
                <div class="row align-items-center">
                    <h5 class="subtitle">Login Info</h5>
                    <div class="col-auto">
                        <div class="input-group">
                            <span class="input-group-text">First name</span>
                            <input data-field-type="first-name" type="text" class="form-control name" name="firstname" placeholder="First name" required pattern="[A-Za-z]+">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="input-group">
                            <span class="input-group-text">Last name</span>
                            <input data-field-type="last-name" type="text" class="form-control name" name="lastname" placeholder="Last name" required pattern="[A-Za-z]+">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-auto">
                        <div class="input-group">
                            <span class="input-group-text" id="">Email Address</span>
                            <input data-field-type="email" type="email" class="form-control email" name="email" id="" placeholder="example@email.com" required>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <h5 class="subtitle">Shipping & Billing info</h5>
                    <div class="col-auto">
                        <div class="input-group">
                            <span class="input-group-text">Address</span>
                            <input data-field-type="address" type="text" name="address" class="form-control address" required>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="input-group">
                            <span class="input-group-text" id="">City</span>
                            <input data-field-type="city" type="text" name="city" class="form-control city" required>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-auto">
                        <div class="input-group">
                            <span class="input-group-text" id="">Country</span>
                            <input data-field-type="country" type="text" name="country" class="form-control country" required>
                        </div>
                    </div>
                    
                    <div class="col-auto">
                        <div class="input-group">
                            <span class="input-group-text" id="">Postal Code</span>
                            <input data-field-type="postal-code" type="text" name="postalcode" class="form-control postal-code" required pattern="\d{5}(?:-\d{4})?|[a-zA-Z]\d[a-zA-Z] ?\d[a-zA-Z]\d">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row align-items-center">
                <button data-button-type="submit" class="btn submit" type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

<?php
  if(isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $postalcode = $_POST['postalcode'];
    $url = "confirmation.php?firstname=$firstname&lastname=$lastname&email=$email&country=$country%address=$address&city=$city%postalcode=$postalcode";
  }
?>

<?php pg_close($db); ?>