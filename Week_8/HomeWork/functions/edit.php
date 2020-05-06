<?php
    $namerror="";
    $counterror="";
    $mdaterror="";
    $edaterror="";
    $companyerror="";
    $weighterror="";
    $calerror="";
    $faterror="";
    
    if(isset($_GET["id"])){
        $id = $_GET['id'];
        $sql_edit = "SELECT * FROM product WHERE id=$id";
        $result = mysqli_query($connection, $sql_edit);
        $row = mysqli_fetch_assoc($result);
    }
    if(isset($_POST['updt'])){
        include "validation.php";
        
        if($errCount==0){
            $sql_update = "UPDATE product SET name='$name', count='$count', mdate='$mdate', edate='$edate',
            company='$company', weight='$weight', cal='$cal', fat='$fat', rdate='$rdate'
            WHERE id=$id";
            mysqli_query($connection, $sql_update);
            header('location: /PHP-MySQL/Week_8/HomeWork/index.php?id='.$id.'');
        }
    }
?>
<article>
    <h1>Edit Product Details</h1>
    <form action="" style="padding:20px" method="post">
        Name
        <br>
        <input type="text" name="name" value="<?=$row['name']?>"><span><?=$namerror?></span>
        <br>
        Count
        <br>
        <input type="number" name="count" value="<?=$row['count']?>"><span><?=$counterror?></span>
        <br>
        Manufacture Date
        <br>
        <input type="date" name="mdate" value="<?=date('Y-m-d', strtotime($row['mdate']))?>"><span><?=$mdaterror?></span>
        <br>
        Expiration Date
        <br>
        <input type="date" name="edate" value="<?=date('Y-m-d', strtotime($row['edate']))?>"><span><?=$edaterror?></span>
        <br>
        Company
        <br>
        <input type="text" name="company" value="<?=$row['company']?>"><span><?=$companyerror?></span>
        <br>
        Weight
        <br>
        <input type="number" name="weight" value="<?=$row['weight']?>"><span><?=$weighterror?></span>
        <br>
        Calories
        <br>
        <input type="number" name="cal" value="<?=$row['cal']?>"><span><?=$calerror?></span>
        <br>
        Fat
        <br>
        <input type="number" name="fat" value="<?=$row['fat']?>"><span><?=$faterror?></span>
        <br>
        Registration Date
        <br>
        <input type="date" name="rdate" value="<?=date('Y-m-d', strtotime($row['rdate']))?>">
        <br>
        <br>
        <input type="hidden" name="id" value="<?=$row['id']?>">
        <input type="submit" name="updt" value="Update">
    </form>
</article>