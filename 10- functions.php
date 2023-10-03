<?php
//declare(strict_types =1);

// Block of code => reuse-ability

//functionName(); // Function call can work before the function

// function name is camelCase by convention
FUNCTION functionName() { // function declaration
    // code
//    Echo "Hello from inside the function";
}

//function funcTionNaME() //Error
//{
//
//}

// Function name is case in-sensitive
functionNamE(); // Function call

// Function can have parameters
function printMessage($message) { // parameter
    echo $message . "<br/>";
}

//printMessage('Message 1'); // Argument
//printMessage('Message 2');


// Default parameter

function createUser(string $name, int $email, bool $isActive = false, int $id=1) :array
{
    return [
        'id' => $id,
        'name' => $name,
        'email' => $email,
        'is_active' => $isActive
    ];
}

function createCar($model, $company, $color) :void
{
    $car =  [
        'model' => $model, // 1990
        'company' => $company,
        'color' => $color
    ];
}

$user = createUser( email:'1', name:'Omar', isActive:true); // Named arguments

var_dump($user);

// PHP is a Loosely typed language

//function newFunction() { // Function expression
//
//}

$sum = function ($a, $b) { // anonymous function
    return $a + $b;
};

$sum(1, 2);
