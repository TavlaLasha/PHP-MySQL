<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Task_3</title>
</head>
<body>
    <?php
        $Symbs = "1234567890abcdefghijklmnopqrstuvwxyz";
        $word='';
        for($i=0; $i<=7; $i++){
            $word.=$Symbs[rand(0, strlen($Symbs)-1)];
        }
    ?>
    <form action="" method="post">
        <div id="cap">
            <div id="word" name="word"><?php echo $word ?></div>
            <input type="submit" value="Reset">
        </div>
        <input type="text" placeholder="Type..." name="info" id="info">
        <input type="button" value="Check" onclick="write()">
    </form>
    <?php
        if(isset($_POST['check'])){
            if($_POST["info"]==$word){
                echo "sworia";
            }
            else {
                echo "arasworia";
            }
        }
    ?>

</body>
<script src="script.js"></script>
</html>