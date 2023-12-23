<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $username = htmlspecialchars($_POST['username']);
   $password = htmlspecialchars($_POST['password']);
   $email = htmlspecialchars($_POST['email']);

   try {
      require_once './dbh.inc.php';
      $query = 'update users set user_name = :user_name , password = :password , email = :email where id =2';
      $statement = $connection->prepare($query);
      $arr = ['array' => 12];

      $hashPassword = password_hash($password, PASSWORD_BCRYPT, $arr);
      $statement->bindParam(":user_name", $username);
      $statement->bindParam(":password", $hashPassword);
      $statement->bindParam(":email", $email);

      if (!empty($username) && !empty($password) && !empty($email)) {
         $statement->execute();
      }

      $connection = null;
      $statement = null;

      header('Location: ../index.php');
      die();
   } catch (PDOException $e) {
      die('Query failed: ' . $e->getMessage());
   }
} else {
   header('Location: ../index.php');
}
