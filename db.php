<?php

    $host       = "localhost";
    $user       = "root";
    $pass       = "";
    $database   = "my_db";

    $connect = new mysqli($host, $user, $pass, $database);

    if (!$connect) {
        die ("connection failed: " . mysqli_connect_error());
    } else {
        $connect->set_charset('utf8');
    }
?>