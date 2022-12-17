<?php
    require_once "includes/functions/database.php";

    function format_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars_decode($data);
        return $data;
    }

    $db = db_connect();
    $sql = "";
    $verified = false;

    if (isset($_POST["submit"])) {
        if (!empty($_POST["firstname"] && !empty($_POST["lastname"]) && !empty($_POST["email"]) && !empty($_POST["address"]) && !empty($_POST["country"]) && !empty($_POST["city"]) && !empty($_POST["postalcode"]))) {
            $verified = true;
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $country = $_POST['country'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $postalcode = $_POST['postalcode'];
            $total = $_POST['cartTotal'];
            $customer = "insert into customer (firstname, lastname, email) values ('{$firstname}', '{$lastname}', '{$email}')";
            $order = "insert into public.order (customer_id, country, street, city, zip_code, total) values ((select customer_id from customer where firstname = '{$firstname}' and lastname = '{$lastname}' limit 1), '{$country}', '{$address}', '{$city}', '{$postalcode}', '{$total}')";
            db_query($db, $customer);
            db_query($db, $order);
            $newOrder = db_query($db, "select max(order_id) id from public.order limit 1");
            $orderId = pg_fetch_assoc($newOrder)["id"];
        }
    }

    $firstname = "";
    $firstnameError = "";
    $lastname = "";
    $lastnameError = "";
    $email = "";
    $emailError = "";
    $address = "";
    $addressError = "";
    $country = "";
    $countryError = "";
    $city = "";
    $cityError = "";
    $postalCode = "";
    $postalCodeError = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["firstname"])) {
            $firstnameError = "* First name is required";
        } else {
            $firstname = ($_POST["firstname"]);
        }
        if(empty($_POST["lastname"])) {
            $lastnameError = "* Last name is required";
        } else {
            $lastname = ($_POST["lastname"]);
        }
        if(empty($_POST["email"])) {
            $emailError = "* Email is required";
        } else {
            $email = ($_POST["email"]);
        }
        if (empty($_POST["address"])) {
            $addressError = "* Address is required";
        } else {
            $address = ($_POST["address"]);
        }
        if(empty($_POST["country"])) {
            $countryError = "* Country is required";
        } else {
            $country = ($_POST["country"]);
        }
        if (empty($_POST["city"])) {
            $cityError = "* City is required";
        } else {
            $city = ($_POST["city"]);
        }
        if (empty($_POST["postalcode"])) {
            $postalCodeError = "* Postal Code is required";
        } else {
            $postalCode = ($_POST["postalcode"]);
        }
    }
?>

<?php require_once "includes/layouts/shared/header.php" ?>
<?php require_once "includes/layouts/shared/navbar.php" ?>
<?php 
    if ($verified) {
        require_once "includes/layouts/verifiedForm.php";
    } else {
        require_once "includes/layouts/unverifiedForm.php";
    }
?>
<?php require_once "includes/layouts/shared/footer.php"; ?>
<?php pg_close($db); ?>