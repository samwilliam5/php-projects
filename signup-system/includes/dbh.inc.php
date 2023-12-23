<?php


$dbserver = 'localhost';
$dbuserame = 'root';
$dbname = 'users';
$dbpassword = '';

try{
   $pdo = new PDO("mysql:host=$dbserver;dbname=$dbname", $dbuserame, $dbpassword);
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    header("Location : ../index.php");
    die('dbs stopped successfully' . $e->getMessage());
}
