<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $dbname = "mydata";

    $connection = mysqli_connect($server, $user, $password, $dbname);
    if(!$connection){
        die("Connection Error!!!");
    }
    echo "<script> console.log('Connection Successfull')</script>";
?>