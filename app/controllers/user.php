<?php

include_once './app/controllers/connect.php';

class User extends db{
    
    private $name;
    private $lastname;
    private $username;
    private $password;

    public function userExists($user,$pass){
        $md5pass = md5($pass);
        $query = $this->connect()->prepare('SELECT * FROM registers_users WHERE username= :user AND password = :pass');
        $query->execute(['user'=>$user,'pass'=>$md5pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM registers_users WHERE username= :user');
        $query->execute(['user' => $user]);

        foreach($query as $currentUser){
            $this->username = $currentUser['username'];
        }
    }

    public function getUsername(){
        return $this->username;
    }

    public function createNewUser($user,$password){
        $md5pass = md5($password);
        $query = $this->connect()->prepare('INSERT INTO registers_users (username,password) VALUES (:user, :password)');
        $query->execute(['user'=>$user,'password'=>$md5pass]);
    }
}

?>