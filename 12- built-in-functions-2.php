<?php

// Built in array functions

//1- Filter

function callBackFunction1($record)
{
    return $record <= 10;
//    if ($record >= 10) {
//        return true;
//    } else {
//        return false;
//    }
}

// What is callback function => Function passed as an argument to another function

$array1 = [1, 10, 5, -2, 20, 13];

$newArray = array_filter($array1, 'callBackFunction1');

//var_dump($newArray);
$usersList = [
    [
        'id' => 1,
        'name' => 'Ahmad',
        'is_active' => true
    ],
    [
        'id' => 2,
        'name' => 'Sara',
        'is_active' => false
    ],
    [
        'id' => 3,
        'name' => 'Mohammad',
        'is_active' => false
    ],
    [
        'id' => 4,
        'name' => 'Khalid',
        'is_active' => true
    ]
];

function filterUsers($user)
{
    return $user['is_active'];
}

$activeUsers = array_filter($usersList, 'filterUsers');
// 2- Array map

$userNames = array_map(function($user) {
    return $user['name'];
}, $activeUsers);

var_dump($userNames);
