<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password']; 


    try{
        require_once('../classes/Db.php');
        require_once('../classes/Login.php');


    $login = new Login($username, $email, $password);

    $login->empty_input();
   

    header("Location: ../index.php");
    die("Request successful!");
    }
    catch(PDOException $e){
        header("Location: ../index.php");
        die("db Request failed" . $e->getMessage());
    }

    
}else{
    header("Location: ../index.php");
    die("Request method not supported");
}