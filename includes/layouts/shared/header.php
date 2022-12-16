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
    <link rel="stylesheet" href="./public/stylesheets/confirmation.css">

    <?php
      if ($_SERVER['REQUEST_URI'] == '/form.php') echo '<link rel="stylesheet" href="./public/stylesheets/form.css">'
    ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script type="module" src="./public/javascripts/app.js"></script>

    <?php
      if ($_SERVER['REQUEST_URI'] == '/cart.php') echo '<script type="module" src="./public/javascripts/cart.js"></script>'
    ?>

    <?php
      if ($_SERVER['REQUEST_URI'] == '/form.php') echo '<script type="module" src="./public/javascripts/form.js"></script>'
    ?>

</head>
<body>

