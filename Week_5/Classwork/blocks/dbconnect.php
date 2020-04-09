<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $dbname = "gau2020db";

    $connection = mysqli_connect($server, $user, $password, $dbname);
    // var_dump($connection);
    if(!$connection){
        die("Connection Error!!!");
    }else{
        echo "Connection Successfull";
    }
?>