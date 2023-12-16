
<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $search = htmlspecialchars($_POST['search']);

   try {
      require_once './include/dbh.inc.php';
      $query = 'select * from messege  where user_name = :search';
      $statement = $connection->prepare($query);
      $statement->bindParam(":search", $search);

      if (!empty($search)) {
         $statement->execute();
         $result = $statement->fetchAll(PDO::FETCH_ASSOC);
         $_SESSION['result'] = $result;
      }

      $connection = null;
      $statement = null;
      header('Location: index.php');
      die();
   } catch (PDOException $e) {
      die('Query failed: ' . $e->getMessage());
   }
} else {
   header('Location: index.php');
}
