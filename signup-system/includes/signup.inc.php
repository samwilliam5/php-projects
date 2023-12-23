<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    try{
        require_once './dbh.inc.php';
        require_once './signup_model.inc.php';
        require_once './signup_controller.inc.php';
        require_once './session.inc.php';

       $error = [];

        if(input_empty($username,$password,$email)){
          $error['empty_input'] = 'Input is empty';
        }
        if(is_valid_email($email)){
            $error['invalid_email'] = 'Email is invalid';

        }
        if(username_exists($pdo,$username)){
            $error['username_exists'] = 'username is already exists';
        }
        if(email_exists($pdo,$email)){
            $error['email_exists'] = 'email is already exists';

        }
        if($error){
           $_SESSION['error_message'] = $error;
           header("Location: ../index.php");
           die();
        }
        if(!$error){
            create_user($pdo,$username,$password,$email);
            $_SESSION['success_message'] = 'success';
            header("Location: ../index.php");
            die();
        }
   

    }

    catch(PDOException $e){
        header("Location : ../index.php");
        die('dbs stopped successfully' . $e->getMessage());
    }
}
else{
    header("Location: ../index.php");
    die('request method not supported');
}