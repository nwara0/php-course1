<?php

// OOP => Object Oriented Programming

// Classes and Objects

// Class => Blueprint / Schema / Template => User (id, name, email, phone_number)

// Object => Instance of the class => Omar, Ahmad

// Define a class

class ClassName // PascalCase
{

}

// Create a new Object
$object1 = new ClassName;

// Add properties to the class

class User
{
    // Properties
    public $id;
    public $name;
    public $email;

    // Methods => a function defined inside the class
    function printName($name)
    {
        echo $name;
    }
}

$newUser = new User;
$newUser->id = 1;
$newUser->name = 'Omar Kamal';
$newUser->email = 'omar@gmail.com';

$newUser2 = $newUser;
$newUser2->id = 2;
$newUser2->name = 'Ahmad';
$newUser2->email = 'ahmad@gmail.com';

$newUser->printName('Khalid');

//var_dump($newUser, $newUser2);

// Variables are called properties, and functions are called methods

