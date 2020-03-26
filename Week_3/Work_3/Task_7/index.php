<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Task_7</title>
</head>
<body>
    <form action="" method="post">
        <H1>Vector Generator</H1>
        <input type="number" name="M" placeholder="X"><br><br>
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
            $a=$_POST["a"];
            $b=$_POST["b"];

            if(trim($M)!='' && trim($a)!='' && trim($b)!=''){
                $valueBool = true;
            }
            if($valueBool){
                if($M >= 1){
                    $xyBool = true;
                }
                if(abs($a-$b)>0){
                    $abBool = true;
                }
            }
            if($xyBool && $abBool && $valueBool){
                $nums = array();
                for($x=0; $x<$M; $x++){
                    $nums[$x] = rand($a, $b);
                }
                echo "<table cellspacing=0>";
                echo "<tr>";
                for($row=0; $row<$M; $row++){
                    echo "<td>";
                    echo $nums[$row];
                    echo "</td>";
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