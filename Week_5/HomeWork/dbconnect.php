<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $dbname = "mydata";

    $connection = mysqli_connect($server, $user, $password, $dbname);
    // var_dump($connection);
    if(!$connection){
        die("Connection Error!!!");
    }else{
        echo "<script> console.log('Connection Successfull')</script>";
    }
?>