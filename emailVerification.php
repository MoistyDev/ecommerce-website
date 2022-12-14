<?php
    require_once "includes/functions/database.php";

    $db = db_connect();
    $sql = "select email from customer where email = " .$_POST['email'];
    $select = db_query($db, $sql);
    $row = pg_fetch_assoc($select);

    if (pg_num_rows($select) > 0) {
        echo "exist";
    } else echo 'notexist';
?>