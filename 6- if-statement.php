<?php

//if (condition) {
//    // If the condition evaluated to true
//}

//if (5 < 10) {
//    var_dump('True');
//}

//if (condition) {
//    // Code if true
//} else {
//    // Code if false
//}

//if (5 > 10) {
//    var_dump('True');
//} else {
//    var_dump('False');
//}

// Truthy and falsy values in php

if ([]) {
    var_dump('True');
}

// Falsy Values

/*
 * empty string
 * Zero
 * '0'
 * null
 * empty array []
 * */

// Ternary operator ? :

// condition ? true : false

//$name = ['1'];
//
//if ($name) {
//    var_dump('Yes');
//} else {
//    var_dump('No');
//}
//
//// Ternary shortcut
//$value = $name ? 'Yes' : 'No';
//
//var_dump($value);
//
//$name = ['1'];
//echo $name ?: 'No';
//
//// Null Operator
//$result = $name['100'] ?? 'Some text';
//
//echo $result;

// Elseif

//if (condition) {
//
//} elseif(anotherCondition) {
//
//} else {
//
//}

$userInput = 500;

if ($userInput === 1) {
    var_dump("Sunday");
} elseif ($userInput === 2) {
    var_dump("Monday");
} elseif ($userInput === 3) {
    var_dump("Tuesday");
} elseif ($userInput === 4) {
    var_dump("Wednesday");
} elseif ($userInput === 5) {
    var_dump("Thursday");
} elseif ($userInput === 6) {
    var_dump("Friday");
} elseif ($userInput === 7) {
    var_dump("Saturday");
} else {
    var_dump("Please enter a number between 1-7");
}

