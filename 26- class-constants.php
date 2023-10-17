<?php

class User
{
    public $name;

    // Define constant data

    const HELLO_MESSAGE = 'This is hello message from class user';

    public function getHelloMsg()
    {
        echo self::HELLO_MESSAGE . " ".  "{$this->name}";
    }
}

$user = new User;
$user->name = "Mohammad";
$user->getHelloMsg();

//var_dump(User::HELLO_MESSAGE);
//var_dump($user::HELLO_MESSAGE); // :: => scope resolution operator
