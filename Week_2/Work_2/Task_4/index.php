<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
        $details = array("Make", "Model", "Color", "Mileage", "Status");
        $cars = array(
            array("Make"=>"Toyota",
            "Model"=>"Corolla",
            "Color"=>"White",
            "Mileage"=>24000,
            "Status"=>"Sold"),
            array("Make"=>"Toyota",
            "Model"=>"Camry",
            "Color"=>"Black",
            "Mileage"=>56000,
            "Status"=>"Available"),
            array("Make"=>"Honda",
            "Model"=>"Accord",
            "Color"=>"White",
            "Mileage"=>15000,
            "Status"=>"Sold") );
            echo "<table>";
            for($col=0; $col<4; $col++){
                echo "<tr>";
                for($row=0; $row<4; $row++){
                    echo "<td>";
                    if($col==0){
                        echo $details[$row];
                    }
                    else {
                        echo $cars[$col-1][$details[$row]];
                    }
                    echo "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
    ?>
</body>
</html>