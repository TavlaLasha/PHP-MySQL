<?php
    $infname = "";
    $inflastname = "";
    $infbirthdate = "";
    $infid = "";
    $infaddress = "";

    if(isset($_POST["sub"])){
        $name = $_POST["name"];
        $lastname = $_POST["lastname"];
        $birthdate = $_POST["birthdate"];
        $id = $_POST["id"];
        $address = $_POST["address"];
        $regdate = $_POST["regdate"];
        $mobile = $_POST["mobile"];
        $adinfo = $_POST["adinfo"];
        $preDate = mktime(0, 0, 0, 1, 1, 1950);
        $checkBool = true;
        $newDate = strtotime($birthdate);
        
        if(!isset($name) || trim($name) == "" || strlen($name)<2 || strlen($name)>20){
            $infname="შეცდომა";
            $checkBool = false;
        }
        if(!isset($lastname) || trim($lastname) == "" || strlen($lastname)<3 || strlen($lastname)>50){
            $inflastname="შეცდომა";
            $checkBool = false;
        }
        if(!isset($birthdate) || trim($birthdate) == "" || $newDate < $preDate){
            $infbirthdate="შეცდომა";
            $checkBool = false;
        }
        if(!isset($id) || trim($id) == "" || strlen($id)!=11 || !is_numeric($id)){
            $infid="შეცდომა";
            $checkBool = false;
        }
        if(!isset($address) || trim($address) == "" || strlen($address)>70){
            $infaddress="შეცდომა";
            $checkBool = false;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Quiz_1</title>
</head>
<body>
    <h1>Form</h1>
    <form action="" method="post">
        სახელი - <input type="text" name="name"><span><?="* ".$infname?></span><br><br>
        გვარი - <input type="text" name="lastname"><span><?="* ".$inflastname?></span><br><br>
        დაბადების თარიღი - <input type="date" name="birthdate"><span><?="* ".$infbirthdate?></span><br><br>
        პირადი ნომერი - <input type="text" name="id"><span><?="* ".$infid?></span><br><br>
        მისამართი - <input type="text" name="address"><span><?="* ".$infaddress?></span><br><br>
        რეგისტრაციის თარიღი - <input type="date" name="regdate"><br><br>
        მობილური - <input type="tel" name="mobile"><br><br>
        დამატებითი ინფორმაცია - <input type="text" name="adinfo"><br><br>
        <input type="submit" value="შეყვანა" name="sub">
    </form>
    <?php
        if(isset($_POST["sub"])){
            if($checkBool){
                include "action.php";
            }
        }
    ?>
</body>
</html>