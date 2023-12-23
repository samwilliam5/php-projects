<?php 


class Db{
    private $host = 'localhost';
    private $dbname = 'users';
    private $dbusername = 'root';
    private $dbpassword = '';


    protected function connectdb(){
        $pdo = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->dbusername, $this->dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
         return $pdo;
    }
    

}