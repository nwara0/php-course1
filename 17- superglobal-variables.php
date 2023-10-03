<?php

// Super Global Variables => Pre defined variables, accessible from anywhere in the script

/*
 * $GLOBALS
 * $_GET
 * $_POST
 * $_SERVER
 * $_FILES
 * $_ENV
 * $_REQUEST
 * $_SESSION
 * $_COOKIE
 * */

$name = 'Mohammad';

$age= 20;

$isActive = true;

//var_dump($GLOBALS['isActive']);

function printData()
{
    echo "my name is {$GLOBALS['name']} and my age is {$GLOBALS['age']}";
}

printData();
