<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Task_2</title>
</head>
<body>
    <form action="" method="post">
        <H1>Table Generator</H1>
        <input type="number" name="M" placeholder="X"><br><br>
        <input type="number" name="N" placeholder="Y"><br><br>
        <input type="number" name="a" placeholder="a"><br><br>
        <input type="number" name="b" placeholder="b"><br><br>
        <input type="submit" value="Generate" name="generate"><br><br>
    </form>
    <?php
        $valueBool = false;
        $xyBool = false;
        $abBool = false;
        if(isset($_POST["generate"])){
            $M=$_POST["M"];
            $N=$_POST["N"];
            $a=$_POST["a"];
            $b=$_POST["b"];

            if(trim($M)!='' && trim($N)!='' && trim($a)!='' && trim($b)!=''){
                $valueBool = true;
            }
            if($valueBool){
                if($M >= 1 || $N >= 1){
                    $xyBool = true;
                }
                if(abs($a-$b)>0){
                    $abBool = true;
                }
            }
            if($xyBool && $abBool && $valueBool){
                echo "<table cellspacing=0>";
                for($col=0; $col<$N; $col++){
                    echo "<tr>";
                    for($row=0; $row<$M; $row++){
                        echo "<td>";
                        echo rand($a, $b);
                        echo "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table><br>";
            }
            else{
                echo "შეცდომა. გთხოვთ გადახედოთ მონაცემებს.";
            }
        }
    ?>
</body>
</html>