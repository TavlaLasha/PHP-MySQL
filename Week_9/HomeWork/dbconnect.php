<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $dbname = "blog";

    $connection = mysqli_connect($server, $user, $password, $dbname);
    // var_dump($connection);
    if(!$connection){
        die("Connection Error!!!");
    }
    echo "<script> console.log('Connection Successfull')</script>";
?>