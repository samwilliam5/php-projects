<?php

declare(strict_types=1);


function get_user($pdo , $username){

$query = "select * from users where user_name = ':username' ";
$stmt = $pdo->prepare($query);
$stmt->bindparam(':username', $username);
$stmt->execute();

$result  = $stmt->fetch(PDO::FETCH_ASSOC);

return $result;

}

