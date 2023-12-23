<?php

class Login extends Db{
    private $username;
    private $email;
    private $password;

    public function __construct($username, $email, $password){
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    private function insert_user(){
        $query  = "insert into users(user_name,email,password) values(:username,:email,:password)";
        $stmt = parent::connectdb()->prepare($query);
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);
        $stmt->execute();
    }

    public function empty_input(){

        if(empty($this->username) || empty($this->email) || empty($this->password)){
            $this->error_message();
        }
        else{
            return $this->insert_user();
        }
       
    }

    public static function error_message(){
        $err = 'Input field is required';
        return $err;
    }


}