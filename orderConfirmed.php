<?php
/*
    $db = db_connect();
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $postalcode = $_POST['postalcode'];

    $customer = "insert into customer (firstname, lastname, email) values ('{$firstname}', '{$lastname}', '$email')";
    $order = "insert into order (customer_id, country, street, city, zip_code) values ((select id from customer where firstname = '{$firstname}' and lastname = '{$lastname}'), '{$country}', '{$address}', '{$city}', '{$postalcode}')";
    db_query($db, $customer);
    db_query($db, $order);
*/
    $cart = json_decode($_POST['cart']);

    echo $cart;
?>