<?php

// Access Modifiers => Where the properties and the methods are accessible

/*
 * public => the property or method can be accessed everywhere
 * protected => the property or the method can only be accessed inside the class and by classess derived from the class
 * private => the property or method can only be accessed inside the class itself
 * */

class User
{
    protected $name;
    private $id;
    protected $accountNumber;

    function setId($id) // default is public
    {
        // Check if the id is valid
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
}

$user1 = new User;
$user1->setId(10);

// Encapsulation

var_dump($user1);
