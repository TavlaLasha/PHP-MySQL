<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task_5</title>
</head>
<body style="text-align:center">
    <form action="" method="post">
        <h1>Counting Number</h1>
        <input type="number" name="num"><br><br>
        <input type="submit" name="sub"><br><br>
    </form>
    <?php
        if(isset($_POST["sub"])){
            echo "Sheyvanili ricxvi ".strlen($_POST["num"])." nishnaa.";
        }
    ?>
</body>
</html>