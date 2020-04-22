<?php
    include "../dbconnect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Task 9</title>
</head>
<body>
    <div><?php
        $query = "SELECT Age, BirthDay, Reg_Date, Gender FROM users LIMIT 3";
        $result = mysqli_query($connection, $query);
        if(!$result){
            die("Error!");
        }
        $i=1;
        while($row = mysqli_fetch_assoc($result)){
            echo $i." ".$row["Age"].", ".$row["BirthDay"].", ".$row["Reg_Date"].", ".$row["Gender"];
            ?><br><?php
            $i='';
        }
    ?></div>
    <div><?php
        $query = "SELECT * FROM users LIMIT 2";
        $result = mysqli_query($connection, $query);
        $i=2;
        while($row = mysqli_fetch_assoc($result)){
            echo $i." ".$row["Name"].", ".$row["Lastname"].", ".$row["Age"].", ".$row["BirthDay"].", ".$row["Reg_Date"].", ".$row["Gender"].", ".$row["Password"];
            ?><br><?php
            $i='';
        }
    ?></div>
    <div><?php
        $query = "SELECT * FROM users WHERE id>1 AND id<4";
        $result = mysqli_query($connection, $query);
        $i=3;
        while($row = mysqli_fetch_assoc($result)){
            echo $i." ".$row["Name"].", ".$row["Lastname"].", ".$row["Age"].", ".$row["BirthDay"].", ".$row["Reg_Date"].", ".$row["Gender"].", ".$row["Password"];
            ?><br><?php
            $i='';
        }
    ?></div>
    <div><?php
        $query = "SELECT * FROM users WHERE id>=2 OR id<2";
        $result = mysqli_query($connection, $query);
        $i=4;
        while($row = mysqli_fetch_assoc($result)){
            echo $i." ".$row["Name"].", ".$row["Lastname"].", ".$row["Age"].", ".$row["BirthDay"].", ".$row["Reg_Date"].", ".$row["Gender"].", ".$row["Password"];
            ?><br><?php
            $i='';
        }
    ?></div>
    <div><?php
        $query = "SELECT * FROM users WHERE BirthDay='2014-07-04'";
        $result = mysqli_query($connection, $query);
        $i=5;
        while($row = mysqli_fetch_assoc($result)){
            echo $i." ".$row["Name"].", ".$row["Lastname"].", ".$row["Age"].", ".$row["BirthDay"].", ".$row["Reg_Date"].", ".$row["Gender"].", ".$row["Password"];
            ?><br><?php
            $i='';
        }
    ?></div>
    <div><?php
        $query = "SELECT * FROM users WHERE BirthDay>'2014-07-04'";
        $result = mysqli_query($connection, $query);
        $i=6;
        while($row = mysqli_fetch_assoc($result)){
            echo $i." ".$row["Name"].", ".$row["Lastname"].", ".$row["Age"].", ".$row["BirthDay"].", ".$row["Reg_Date"].", ".$row["Gender"].", ".$row["Password"];
            ?><br><?php
            $i='';
        }
    ?></div>
    <div><?php
        $query = "SELECT * FROM users WHERE BirthDay>'2014-06-04' AND BirthDay<'2014-07-04'";
        $result = mysqli_query($connection, $query);
        $i=7;
        while($row = mysqli_fetch_assoc($result)){
            echo $i." ".$row["Name"].", ".$row["Lastname"].", ".$row["Age"].", ".$row["BirthDay"].", ".$row["Reg_Date"].", ".$row["Gender"].", ".$row["Password"];
            ?><br><?php
            $i='';
        }
    ?></div>
    <div><?php
        $query = "SELECT * FROM users WHERE Age>=10 AND Age<=18";
        $result = mysqli_query($connection, $query);
        $i=8;
        while($row = mysqli_fetch_assoc($result)){
            echo $i." ".$row["Name"].", ".$row["Lastname"].", ".$row["Age"].", ".$row["BirthDay"].", ".$row["Reg_Date"].", ".$row["Gender"].", ".$row["Password"];
            ?><br><?php
            $i='';
        }
    ?></div>
</body>
</html>