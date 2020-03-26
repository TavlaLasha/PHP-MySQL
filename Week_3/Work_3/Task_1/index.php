<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Task_1</title>
</head>
<body>
<?php
    echo "<table cellspacing=0>";
    for($col=0; $col<10; $col++){
        echo "<tr>";
        for($row=0; $row<10; $row++){
            echo "<td>";
            echo rand(10, 99);
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table><br>";
?>
</body>
</html>