<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task_6</title>
</head>
<body style="text-align:center">
<form action="" method="post">
        <h1>Registration</h1>
        Email - <input type="text" id="email" name="email"><br><br>
        Password - <input type="password" id="pass" name="pass"><br><br>
        Verify Password - <input type="password" id="repass" name="repass"><br><br>
        <input type="submit" name="sub">
    </form>
    <?php
        if(isset($_POST["sub"])){
            if(!isset($_POST["email"]) || trim($_POST["email"]) == ''){
                changeColor("email", FALSE);
            }
            else{
                changeColor("email", TRUE);
            }
            if(!isset($_POST["pass"]) || trim($_POST["pass"]) == ''){
                changeColor("pass", FALSE);
            }
            else{
                changeColor("pass", TRUE);
            }
            if($_POST["pass"]==$_POST["repass"]){
                changeColor("repass", TRUE);
            }
            else{
                changeColor("repass", FALSE);
            }
        }
        function changeColor($input, $state){
            echo '<style type="text/css">
                #'.$input.' {';
                if($state){
                    echo '
                    background-color: lightgreen;
                    border-color: green;';
                }else{
                    echo '
                    background-color: lightcoral;
                    border-color: red;';
                }
                echo '
            </style>';
        }
    ?>
</body>
</html>