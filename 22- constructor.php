<?php

// Constructor => Allows to initialize the properties when creating an object.

// Is a magic PHP method (starts with __)

class User
{
    public $name;
    public $email;

    // Will be called once we create the object
    public function __construct($name, $email = 'omar@gmail.com')
    {
        $this->name = $name;
        $this->email = $email;
    }
}

$user = new User('Mohammad', 'mohammad@gmail.com');
//$user->name = 'Omar KAmal';
//$user->email = 'omar@gmail.com';

var_dump($user);
