<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
        $nums = array(array(11,40,37,23),array(43,20,95,26),array(17,84,54,23),array(71,43,36,13));
        echo "<table cellspacing=0>";
        for($col=0; $col<4; $col++){
            echo "<tr>";
            for($row=0; $row<4; $row++){
                echo "<td>";
                echo $nums[$col][$row];
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table><br>";
    ?>
    <form action="" method="post">
        Number - <input type="number" name="numb" id="numb">
        <input type="submit" value="შეტანა" name="send">
    </form>
    <?php
        $jeradebi= array();
        $jami=0;
        $namravli=1;
        
        if(isset($_POST['send'])){
            for($col=0; $col<4; $col++){
                for($row=0; $row<4; $row++){
                    if($nums[$col][$row]%$_POST['numb']==0){
                        array_push($jeradebi, $nums[$col][$row]);
                    }
                    $jami+=$nums[$col][$row];
                    $namravli*=$nums[$col][$row];
                }
            }
            $sashualo=$jami/16;
            echo "<br>x-ის ჯერადი რიცხვები მატრიციდან: ";
            print_r($jeradebi);
            echo "<br>რიცხვების ჯამი მატრიცაში: ".$jami;
            echo "<br>რიცხვების საშუალო მატრიცაში: ".$sashualo;
            echo "<br>რიცხვების ნამრავლი მატრიცაში: ".$namravli;
        }
    ?>
</body>
</html>