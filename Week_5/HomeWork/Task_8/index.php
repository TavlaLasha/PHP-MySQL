<?php
    include "../dbconnect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div id="cont">
        <div id="d1"><?php
            $query = "SELECT Text, Title FROM menu WHERE id=1";
            $result = mysqli_query($connection, $query);
            // var_dump($connection);
            if(!$result){
                die("Error!");
            }
            
        ?></div>
    </div>
</body>
</html>