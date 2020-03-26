<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Task_6</title>
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
                $nums = array(array(),array(),array(),array());
                for($coll=0; $coll<$N; $coll++){
                    for($roww=0; $roww<$M; $roww++){
                        $nums[$roww][$coll] = rand($a, $b);
                    }
                }
                echo "<table cellspacing=0>";
                for($row=0; $row<$M; $row++){
                    $rowSum = 0;
                    echo "<tr>";
                    for($col=0; $col<$N; $col++){
                        echo "<td>";
                        echo $nums[$row][$col];
                        echo "</td>";
                        $rowSum += $nums[$row][$col];
                        if($col==$N-1){
                            echo "<td>";
                            echo $rowSum;
                            echo "</td>";
                        }
                    }
                    echo "</tr>";
                }
                    echo "<tr>";
                    $colSum=0;
                    for($col=0; $col<$N; $col++){
                        for($row=0; $row<$M; $row++){
                            $colSum+=$nums[$row][$col];
                        }
                        echo "<td>";
                        echo $colSum;
                        echo "</td>";
                        $colSum=0;
                    }
                    echo "</tr>";
                echo "</table><br>";
            }
            else{
                echo "შეცდომა. გთხოვთ გადახედოთ მონაცემებს.";
            }
        }
    ?>
</body>
</html>