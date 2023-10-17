<?php

class User
{
    public $name;

    public static function welcome()
    {
        echo "Hello from class user";
    }

    public function getName()
    {
        return "Mohammad";
    }
}

$user = new User;
$name = $user->getName();

$user->welcome();

//User::welcome();
