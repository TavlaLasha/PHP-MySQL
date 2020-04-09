<?php
        $userError = "";
        if(isset($_POST["sub"])){
            if(!isset($_POST["name"]) || trim($_POST["name"]) == '' && strlen($_POST["name"])<2 && strlen($_POST["name"])>30){
                check(0, FALSE);
            }
            else{
                check(0, TRUE);
            }
            if(!isset($_POST["last"]) || trim($_POST["last"]) == '' && strlen($_POST["last"])<3 && strlen($_POST["last"])>50){
                check(1, FALSE);
            }
            else{
                check(1, TRUE);
            }
            // if($_POST["pass"]==$_POST["repass"]){
            //     check("repass", TRUE);
            // }
            // else{
            //     check("repass", FALSE);
            // }
        }
        function check($data, $state){
            echo "<script src='script.js'>verify(".$data.",".$state."</script>";
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task_7</title>
</head>
<body style="text-align:center">
    <form action="" method="post">
        <h1>Student</h1>
        First Name - <input type="text" id="name" name="name"><span class="span"><?=$userError?></span><br><br>
        Last Name - <input type="text" id="last" name="last"><span class="span"></span><br><br>
        Birth Date - <input type="date" id="date" name="date"><span class="span"></span><br><br>
        Course - <input type="number" id="course" name="course"><span class="span"></span><br><br>
        ID - <input type="number" id="id" name="id"><span class="span"></span><br><br>
        Address - <input type="text" id="address" name="address"><span class="span"></span><br><br>
        Mobile Number - <input type="tel" id="mobile" name="mobile"><span class="span"></span><br><br>
        <input type="submit" name="sub">
    </form>

</body>
</html>