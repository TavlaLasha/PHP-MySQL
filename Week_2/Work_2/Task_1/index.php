<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="x">
        <br><br>
        <input type="submit" name="check" value="CHECK">
    </form>
    <?php
        $downCount=0;
        $upCount=0;
        $numbers = [10, 12, 54, 23, 80, 76, 23, 95, 33, 55, 11, 17];
        echo "Masivi: ";
        print_r($numbers);
        if(isset($_POST["check"])){
            for($i=0; $i<count($numbers); $i++){
                if($numbers[$i]<$_POST["x"]){
                    $upCount++;
                }
                else if($numbers[$i]>$_POST["x"]){
                    $downCount++;
                }
            }
            echo "<br> Masivshi ".$_POST["x"]."-ze didi " .$upCount." ricxvia da patara ".$downCount;
        }
    ?>
</body>
</html>