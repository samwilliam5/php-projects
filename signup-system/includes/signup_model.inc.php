<?php  

function get_username(object $pdo , string $username){

    $query = "select user_name from users where user_name = :username";
    $statement =  $pdo->prepare($query);
    $statement->bindparam(":username", $username);
    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_ASSOC);
    return $result;  
}


function get_email(object $pdo , string $email){
    $query = "select email from users where email = :email";
    $statement =  $pdo->prepare($query);
    $statement->bindparam(":email", $email);
    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_ASSOC);
    return $result;


}

function set_user($pdo,$username,$password,$email){

    $query = "insert into users(user_name, password, email) values(:username, :password, :email)";
    $statement =  $pdo->prepare($query);
    $secure = [
        'cost' =>12
    ];
    $password_hash = password_hash($password,PASSWORD_BCRYPT,$secure);
    $statement->bindparam(":username", $username);
    $statement->bindparam(":password", $password_hash);
    $statement->bindparam(":email", $username);
    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_ASSOC);
    return $result;  
    
}