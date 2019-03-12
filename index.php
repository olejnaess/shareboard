<?php

class User{
    public function __construct()
    {
//        echo "Constructur called";
    }


    public function register(){
        echo ' User Registered'. PHP_EOL;
    }

    public function login($username, $password){
        $this->auth_user($username, $password);
    }

    public function auth_user($username, $password)
    {
        echo $username. ' is authenticated'.PHP_EOL;
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
//        echo 'Destructor called';
    }
}

$User = new User;

//$User->register();
$User->login("Ole", "tester123");
