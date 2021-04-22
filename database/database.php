<?php

class database {
    public PDO $pdo;
    public function __construct(){
        $config = require __DIR__.'/config.php';

        $servername = $config['servername'];
        $username = $config['username'];
        $password = $config['password'];
        $database = $config['dbname'];

        $this -> pdo = new \PDO("mysql:host=$servername;dbname=$database", $username, $password);
    }
    public function register($username, $email, $password){
        $statement = $this -> pdo -> prepare('INSERT INTO users (username, email, password) VALUES (:username, :email, :password)');
        $statement->bindParam(':username',$username);
        $statement->bindParam(':email',$email);
        $statement->bindParam(':password',$password);
        return $statement -> execute();
    }
    public function get_email($email): bool{
        $statement = $this -> pdo -> prepare('SELECT * FROM users WHERE email = :email');
        $statement -> bindValue(':email', $email);
        $statement -> execute();
        $user =  $statement -> fetchAll(PDO::FETCH_ASSOC);

        if(!empty($user)){
            return true;
        }
        else return false;
    }
    public function get_user($username): bool{
        $statement = $this -> pdo -> prepare('SELECT * FROM users WHERE username = :username');
        $statement -> bindValue(':username', $username);
        $statement -> execute();
        $user = $statement -> fetchAll(PDO::FETCH_ASSOC);

        if(!empty($user)){
            return true;
        }
        else return false;
    }
}
?>