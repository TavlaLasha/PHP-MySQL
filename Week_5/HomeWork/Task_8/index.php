<?php
    include "../dbconnect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Task 8</title>
</head>
<body>
    <div><?php
        $query = "SELECT Text, Title FROM menu WHERE id=1";
        $result = mysqli_query($connection, $query);
        if(!$result){
            die("Error!");
        }
        while($row = mysqli_fetch_assoc($result)){
            echo "1 ".$row["Title"].", ".$row["Text"];
        }
    ?></div>
    <div><?php
        $query = "SELECT Text, Title FROM menu";
        $result = mysqli_query($connection, $query);
        $i=2;
        while($row = mysqli_fetch_assoc($result)){
            echo $i." ".$row["Title"].", ".$row["Text"]."\n";
            ?><br><?php
            $i='';
        }
    ?></div>
    <div><?php
        $query = "SELECT * FROM menu WHERE id=2";
        $result = mysqli_query($connection, $query);
        while($row = mysqli_fetch_assoc($result)){
            echo "3 ".$row["Title"].", ".$row["Text"].", ".$row["Meta_k"].", ".$row["Meta_d"];
        }
    ?></div>
    <div><?php
        $query = "SELECT * FROM menu WHERE id>=2";
        $result = mysqli_query($connection, $query);
        $i=4;
        while($row = mysqli_fetch_assoc($result)){
            echo $i." ".$row["Title"].", ".$row["Text"].", ".$row["Meta_k"].", ".$row["Meta_d"]."\n";
            ?><br><?php
            $i='';
        }
    ?></div>
    <div><?php
        $query = "SELECT * FROM menu WHERE id<=4";
        $result = mysqli_query($connection, $query);
        $i=5;
        while($row = mysqli_fetch_assoc($result)){
            echo $i." ".$row["Title"].", ".$row["Text"].", ".$row["Meta_k"].", ".$row["Meta_d"]."\n";
            ?><br><?php
            $i='';
        }
    ?></div>
    <div><?php
        $query = "SELECT * FROM menu WHERE Title='ფილმები' OR Title='თამაშები'";
        $result = mysqli_query($connection, $query);
        $i=6;
        while($row = mysqli_fetch_assoc($result)){
            echo $i." ".$row["Title"].", ".$row["Text"].", ".$row["Meta_k"].", ".$row["Meta_d"]."\n";
            ?><br><?php
            $i='';
        }
    ?></div>
    <div><?php
        $query = "SELECT * FROM menu WHERE Title='მუსიკები' AND id>3";
        $result = mysqli_query($connection, $query);
        while($row = mysqli_fetch_assoc($result)){
            echo "7 ".$row["Title"].", ".$row["Text"].", ".$row["Meta_k"].", ".$row["Meta_d"]."\n";
        }
    ?></div>
</body>
</html>