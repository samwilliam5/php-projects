<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $username = htmlspecialchars($_POST['username']);
   $password = htmlspecialchars($_POST['password']);

   try {
      require_once './dbh.inc.php';
      $query = 'delete from  users where user_name = :user_name and password = :password ';
      $statement = $connection->prepare($query);

      $statement->bindParam(":user_name", $username);
      $statement->bindParam(":password", $password);


      if (!empty($username) && !empty($password)) {
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
