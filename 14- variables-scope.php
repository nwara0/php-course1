<?php

/*
 * local
 * global
 * static
 * */

$name = 'Ahmad'; // Global Variable => has a global scope => can be accessed only outside the function
$lastName = "Mohammad";

//function printName()
//{
////    $name = 'Mohammad'; // Local Variable => a variable declared inside the function => local scope
//    global $name, $lastName;
//    echo $name . " " . $lastName;
//}

$printName = function () use($name, $lastName){
    echo $name . " " . $lastName;
};

//$printName();
//if (true) {
//    $result = 20;
//}
//
//var_dump($result);

//$array1 = [1, 2, 3];
//
//array_filter($array1, function($element) use ($name) {
//    echo $name;
//});

function calculate()
{
    static $num1 = 10;

    echo $num1 . "<br/>";

    $num1 ++;
}

calculate();
calculate();
calculate();
