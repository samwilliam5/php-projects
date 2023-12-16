<?php

$dbconfig =  "mysql:host=localhost;dbname=users";
$dbusername = 'root';
$dbpassword = '';


try {
    $connection = new PDO($dbconfig, $dbusername, $dbpassword);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'connection established';
} catch (PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}
