<?php
    include "App/database/db.php";
    include "App/helpers/validateUser.php";

    $username = '';
    $email = '';
    $password = '';
    $passwordConf = '';
    $errors = array();
    $table = 'users';
    
    function userLogin($user){
        $_SESSION['id'] = $user['user_id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['admin'] = $user['admin'];
        $_SESSION['message'] = "You are now logged in";
        $_SESSION['type'] = "Success";
        if ($_SESSION['admin']) {
            header('location: admin/dashboard.php');
        } else {
            header('location: index.php');
        }
        exit();
    }
    if(isset($_POST['register-btn'])){

        $errors = validateUser($_POST);

        if(count($errors)==0){
            unset($_POST['register-btn'], $_POST['passwordConf']);
            $_POST['admin']=0;

            $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $user_id = create($table, $_POST);
            $user = selectOne($table, ['user_id' => $user_id]);

            userLogin($user);
        }
        else{
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $passwordConf = $_POST['passwordConf'];
        }
    }
    if(isset($_POST['login-btn'])){
        $errors = validateLogin($_POST);
        if(count($errors)==0){
            $user = selectOne($table, ['username' => $_POST['username']]);
            if ($user && password_verify($_POST['password'], $user['password'])) {
                userLogin($user);
            } else {
                array_push($errors, "Wrong credentials");
            }
        }
        $username = $_POST['username'];
        $password = $_POST['password'];
    }
?>