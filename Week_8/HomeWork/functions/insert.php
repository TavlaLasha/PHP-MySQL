<?php
    $namerror="";
    $counterror="";
    $mdaterror="";
    $edaterror="";
    $companyerror="";
    $weighterror="";
    $calerror="";
    $faterror="";
    if(isset($_POST["insert"])){
        include "validation.php";
        if($errCount==0){
            $sql = "INSERT INTO product (name, count, mdate, edate, company, weight, cal, fat, rdate)
            VALUES ('$name', '$count', '$mdate', '$edate', '$company', '$weight', '$cal', '$fat', '$rdate')";
            mysqli_query($connection, $sql);
            header('location: /PHP-MySQL/Week_8/HomeWork/?top=insert');
        }
    }
?>
<article>
    <form action="" style="padding:20px" method="post">
        <h1>Add New Product</h1>
        Name
        <br>
        <input type="text" name="name"><span><?=$namerror?></span>
        <br>
        Count
        <br>
        <input type="number" name="count"><span><?=$counterror?></span>
        <br>
        Manufacture Date
        <br>
        <input type="date" name="mdate"><span><?=$mdaterror?></span>
        <br>
        Expiration Date
        <br>
        <input type="date" name="edate"><span><?=$edaterror?></span>
        <br>
        Company
        <br>
        <input type="text" name="company"><span><?=$companyerror?></span>
        <br>
        Weight
        <br>
        <input type="number" name="weight"><span><?=$weighterror?></span>
        <br>
        Calories
        <br>
        <input type="number" name="cal"><span><?=$calerror?></span>
        <br>
        Fat
        <br>
        <input type="number" name="fat"><span><?=$faterror?></span>
        <br>
        Registration Date
        <br>
        <input type="date" name="rdate" value="<?=date('Y-m-d');?>">
        <br>
        <br>
        <input type="submit" name="insert" value="Upload">
    </form>
</article>