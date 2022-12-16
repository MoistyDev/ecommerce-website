<?php
    $db = db_connect();
    $sql = "select email from customer where email = '{$_POST["emailValue"]}'";
    $select = db_query($db, $sql);

    if (pg_num_rows($select) > 0) {
        echo $emailError = "Email already exists";
    }
?>