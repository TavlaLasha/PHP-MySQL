<?php
    $name = $_POST['name'];
    $count = $_POST['count'];
    $mdate = $_POST['mdate'];
    $edate = $_POST['edate'];
    $company = $_POST['company'];
    $weight = $_POST['weight'];
    $cal = $_POST['cal'];
    $fat = $_POST['fat'];
    $rdate = $_POST['rdate'];
    $errCount=0;
    
    if(!isset($name) || trim($name) == ""){
        $namerror=" Required";
        $errCount++;
    }else if(strlen($name)<2){
        $namerror=" Too Small";
        $errCount++;
    }
    else if(strlen($name)>50){
        $namerror=" Too Big";
        $errCount++;
    }
    if(!isset($count) || trim($count) == ""){
        $counterror=" Required";
        $errCount++;
    }else if(strlen($count)<1){
        $counterror=" Too Small";
        $errCount++;
    }
    else if(strlen($count)>100){
        $counterror=" Too Big";
        $errCount++;
    }
    if(!isset($mdate) || trim($mdate) == ""){
        $mdaterror=" Required";
        $errCount++;
    }else if($mdate>date('Y-m-d')){
        $mdaterror=" Wrong";
        $errCount++;
    }
    if(!isset($edate) || trim($edate) == ""){
        $edaterror=" Required";
        $errCount++;
    }else if($edate<=$mdate){
        $edaterror=" Wrong";
        $errCount++;
    }
    if(!isset($company) || trim($company) == ""){
        $companyerror=" Required";
        $errCount++;
    }
    if(!isset($weight) || trim($weight) == ""){
        $weighterror=" Required";
        $errCount++;
    }
    if(!isset($cal) || trim($cal) == ""){
        $calerror=" Required";
        $errCount++;
    }
    if(!isset($fat) || trim($fat) == ""){
        $faterror=" Required";
        $errCount++;
    }
?>