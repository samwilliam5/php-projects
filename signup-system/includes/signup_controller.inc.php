<?php 


function input_empty($username , $password , $email){
    if(empty($username) || empty($password) || empty($email)){
        return true;
    }
    else{
        return false;
    }
}


function is_valid_email($email){
     
    if(!empty(filter_var($email, FILTER_VALIDATE_EMAIL))){
      return false;
    } else{
        return true;
    }
}



function username_exists($pdo,$username){
    if(get_username($pdo,$username)){
        return true;
    }
    else{
        return false;
    }

}

function email_exists($pdo,$username){
    if(get_email($pdo,$username)){
        return true;

    }else{
        return false;
    }
}


function create_user($pdo,$username,$password,$email){

    if(set_user($pdo,$username,$password,$email)){
      return true;
    }
    else{
     return false;
    }

}