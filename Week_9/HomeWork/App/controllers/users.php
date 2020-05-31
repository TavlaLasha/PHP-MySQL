<?php
    include "App/database/db.php";
    include "App/helpers/validateUser.php";

    $username = '';
    $email = '';
    $password = '';
    $passwordConf = '';
    $errors = array();
    
    if(isset($_POST['register-btn'])){

        $errors = validateUser($_POST);

        if(count($errors)==0){
            unset($_POST['register-btn'], $_POST['passwordConf']);
            $_POST['admin']=0;

            $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $user_id = create('users', $_POST);
            $user = selectOne('users', ['user_id' => $user_id]);

            $_SESSION['id'] = $user['user_id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['admin'] = $user['admin'];
            $_SESSION['message'] = "You are now logged in";
            $_SESSION['type'] = "Success";
            header('location: index.php');
            exit();

        }else{
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $passwordConf = $_POST['passwordConf'];
        }
    }
?>