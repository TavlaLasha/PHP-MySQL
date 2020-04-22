<?php
    include "../dbconnect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Task 10</title>
</head>
<body>
    <div><?php
        $query = "SELECT * FROM data WHERE id<=7 AND Type=2";
        $result = mysqli_query($connection, $query);
        if(!$result){
            die("Error!");
        }
        $i=1;
        while($row = mysqli_fetch_assoc($result)){
            echo $i." ".$row["Title"].", ".$row["Date"].", ".$row["Type"].", ".$row["Photo"].", ".$row["Text"].", ".$row["Autor"].", ".$row["Description"].", ".$row["Meta_k"].", ".$row["Meta_d"];
            ?><br><?php
            $i='';
        }
    ?></div>
    <div><?php
        $query = "SELECT * FROM (SELECT * FROM data ORDER BY id DESC LIMIT 5)SQ ORDER BY id ASC";
        $result = mysqli_query($connection, $query);
        $i=2;
        while($row = mysqli_fetch_assoc($result)){
            echo $i." ".$row["Title"].", ".$row["Date"].", ".$row["Type"].", ".$row["Photo"].", ".$row["Text"].", ".$row["Autor"].", ".$row["Description"].", ".$row["Meta_k"].", ".$row["Meta_d"];
            ?><br><?php
            $i='';
        }
    ?></div>
    <div><?php
        $query = "SELECT * FROM data ORDER BY id DESC LIMIT 10";
        $result = mysqli_query($connection, $query);
        $i=3;
        while($row = mysqli_fetch_assoc($result)){
            echo $i." ".$row["Title"].", ".$row["Date"].", ".$row["Type"].", ".$row["Photo"].", ".$row["Text"].", ".$row["Autor"].", ".$row["Description"].", ".$row["Meta_k"].", ".$row["Meta_d"];
            ?><br><?php
            $i='';
        }
    ?></div>
    <div><?php
        $query = "SELECT * FROM data WHERE id%2=0";
        $result = mysqli_query($connection, $query);
        $i=4;
        while($row = mysqli_fetch_assoc($result)){
            echo $i." ".$row["Title"].", ".$row["Date"].", ".$row["Type"].", ".$row["Photo"].", ".$row["Text"].", ".$row["Autor"].", ".$row["Description"].", ".$row["Meta_k"].", ".$row["Meta_d"];
            ?><br><?php
            $i='';
        }
    ?></div>
</body>
</html>