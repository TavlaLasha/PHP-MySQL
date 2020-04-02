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
    function generate(){
        $Symbs = "abcdefghijklmnopqrstuvwxyz";
        echo "<table cellspacing='0'>";
        for($col=0; $col<=10; $col++){
            echo "<tr>";
            for($row=0; $row<=10; $row++){
                $word='';
                echo "<td>";
                for($i=0; $i<=7; $i++){
                    $word.=$Symbs[rand(0, strlen($Symbs)-1)];
                }
                echo $word;
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    generate();
    ?>
</body>
</html>