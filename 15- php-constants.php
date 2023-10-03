<?php

// Constants once they are defined they cannot be changed

// Maximum allowed age for users

define('MAX_ALLOWED_AGE', 20);
//define('MAX_ALLOWED_AGE', 30); // Cannot be re-defined
//echo MAX_ALLOWED_AGE;

// Constants are Global.

function test()
{
//    echo MAX_ALLOWED_AGE;
}

test();

//echo PHP_INT_MAX; // PHP predefined constants

//const MESSAGE = 'Hellooooooooooooooo';
//echo MESSAGE;

// What is the difference between both (define vs const)?

if (true) {
//    const MESSAGE = 'Hellooooooooooooooo';
    define('MESSAGE', 20);
}

//echo MESSAGE;


//$x = [1, 2, 3];
//
//$y = [4, 5, 6];
//
//$newArray = [...$x, ...$y];
//
//var_dump($newArray);

function test2($x, ...$data) {
    var_dump($x);
    echo "<br/>";
    var_dump($data);
}

test2(1, "xassdasd", [1], null, 1);






