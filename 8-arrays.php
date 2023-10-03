<?php

// Store multiple and different values in one variable

// 1- Indexed Arrays

$array = []; // Empty array
$students = ['Omar', 'Mohammad', 'Khalid'];
$numbers = [1, 2, 3, 4];

// We can combine values inside the array
$mixedArray = [1, 'string', null, True, false, []];

// Arrays are indexed => Index starts from zero
$users = ['Mohammad', 'Khalid', 'Sara'];

$mohammad = $users[0];

$sara = $users[2];

// Length of the array => we start counting the length from 1

$example = [1, 'x', true, null, 5];

$exampleLength = 5;
$lastIndex = 4;

// Last index equals => array length - 1

$newArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 'x00', 20, true, null,1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 'x00', 20, true, null,1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 'x00', 20, true, null];

// we use the built-in php function count($array) to know the array length

$newArrayLength = count($newArray);

$lastIndex = $newArrayLength - 1;

//var_dump($lastIndex);

// Add or edit elements in the array

$cars = ['BMW', 'Mercedes', 'Ferrari'];
$cars[0] = 'Toyota';
$cars[3] = 'Nissan';
$cars[500] = 'Mazda';

//var_dump($cars[300]);

// 2- Associative Arrays => Arrays that use named keys

//$cars = [
//    'first_car' => 'BMW',
//    'second_car' => 'Mercedes',
//    'third_car' => 'Mercedes',
//    4 => 'Mazda'
//];
//
//var_dump($cars['x']);

$user= ['Omar Kamal', 123123123, 'omar@mail.com', false, 10];

$user = [
  'name' => 'Omar Kamal',
  'email' => 'omar@mail.com',
  'mobile_number' => 12312313,
  'is_valid' => false,
  'age' => 10
];

// Multidimensional Array
$users = [
    [
        'name' => 'mohammad',
        'email' => 'mohammad@mail.com',
        'mobile_number' => 5658787,
        'is_valid' => false,
        'age' => 10,
        'hobbies' => ['football', 'reading']
    ],
    [
        'name' => 'Omar Kamal',
        'email' => 'omar@mail.com',
        'mobile_number' => 20202020,
        'is_valid' => true,
        'age' => 30
    ],
    [
        'name' => 'Ahmad',
        'email' => 'ahmad@mail.com',
        'mobile_number' => 5068977,
        'is_valid' => false,
        'age' => 20
    ]
];

var_dump($users[0]);




