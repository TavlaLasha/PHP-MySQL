<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $dbname = "blog";

    $conn = new MySQLi($server, $user, $password, $dbname);

    if($conn->connect_error){
        die("Connection Error!!!");
    }
    echo "<script> console.log('Connection Successfull')</script>";
?>