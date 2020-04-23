<?php
$titerror="";
if(isset($_POST["insert"])){
    $Dasaxeleba = $_POST['title'];
    $Ganmarteba = $_POST['desc'];
    if(!isset($Dasaxeleba) || trim($Dasaxeleba) == ""){
        $titerror=" სავალდებულო";
    }else if(strlen($Dasaxeleba)<5){
        $titerror=" პატარაა";
    }
    else if(strlen($Dasaxeleba)>100){
        $titerror=" დიდია";
    }
    else{
        $sql = "INSERT INTO Varjishi (Dasaxeleba, Ganmarteba)
        VALUES ('$Dasaxeleba', '$Ganmarteba')";
        mysqli_query($connection, $sql);
        header('location: /PHP-MySQL/Lasha%20Tavlalashvili%20Midterm_1/?top=insert');
    }
    }
?>
<article>
    <h1>Varjishis Chasma</h1>
    <form action="" style="padding:20px" method="post">
        Dasaxeleba 
        <input type="text" name="title"><span><?=$titerror?></span>
        <br>
        <br>
        Ganmarteba
        <br>
        <textarea name="desc" cols="30" rows="10"></textarea>
        <br>
        <br>
        <input type="submit" name="insert" value="INSERT">
    </form>
</article>