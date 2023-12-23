<?php

declare(strict_types=1);


function username_not_matched($pdo , $username){

    if(!get_user($pdo ,$username)){
          return true;
    }
    else{
        return false;
    }

}

function password_not_matched($pdo , $password){
    if(!get_user($pdo ,$password)){
        return true;
  }
  else{
      return false;
  }
}