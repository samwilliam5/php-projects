<?php



if($_POST['REQUEST_METHOD'] == 'POST'){

    $username = $_POST['username'];
    $password = $_POST['password'];

    try{
        require_once './dbh.inc.php';
        require_once './login_model.inc.php';
        require_once './login_contr.inc.php';


        if(username_not_matched($pdo , $username)){

        }
        if(password_not_matched($pdo , $password)){

        }



    }
    catch(PDOException $e){
        die("db Execution Failed" . $e->getMessage());
    }

}else{
   header('Location: ../index.php');
   die('Request method not supported');
}


