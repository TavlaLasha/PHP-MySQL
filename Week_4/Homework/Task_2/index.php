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
        <input type="submit" value="Generate" name="generate"><br><br>
    </form>
    <?php
    $valueBool = false;
    $xyBool = false;
    if(isset($_POST["generate"])){
        $M=$_POST["M"];
        $N=$_POST["N"];

        if(trim($M)!='' && trim($N)!=''){
            $valueBool = true;
        }
        if($valueBool){
            if($M >= 1 && $N >= 1){
                $xyBool = true;
            }
        }
        if($valueBool && $xyBool){
            generate($M, $N);
        }
        else{
            echo "Gtxovt Gadaxedot sheyvanil monacemebs.";
        }
    }
    function generate($M, $N){
        $Symbs = "1234567890abcdefghijklmnopqrstuvwxyz";
        echo "<table cellspacing='0'>";
        for($col=0; $col<$M; $col++){
            echo "<tr>";
            for($row=0; $row<$N; $row++){
                echo "<td>";
                $word='';
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
    ?>
</body>
</html>