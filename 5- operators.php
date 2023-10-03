<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Operators</title>
</head>
<body>
<h1>Operators In PHP</h1>

<hr>
<h2>Arithmetic Operators</h2>

<?php

// Operators

/* Arithmetic Operators
 * Addition => +
 * Subtraction => -
 * Multiplication => *
 * Division => /
 * Modulus => %
 * Exponentiation => **
 * */

$num1 = 10;
$num2 = 2;
 ?>

<!--Reserved keywords are not case-sensitive (case in-sensitive)-->
<p><?php ECHO $num1 + $num2 ?></p>
<p><?php echo $num1 - $num2 ?></p>
<p><?php echo $num1 * $num2 ?></p>
<p><?php echo $num1 / $num2 ?></p>
<p><?= $num1 % $num2 ?></p>
<p><?= $num1 ** $num2 ?></p>

<!-- A use case of the modulus operator => we can identify even and odd numbers -->
<hr>

<h2>Assignment Operators</h2>
<?php
// = => is and assignment operator

$number = 100;

$number = 100 + 2;

$number += 2; // shorthand for addition, same applies for other arithmetic operators

$title = "PHP Course";

$title .= "2023";
?>
<hr>
<h2>Increment / Decrement Operators</h2>

<?php
$value = 20;
?>

<!--Post Increment-->
<p><?php echo $value ++; ?></p>

<!--Pre Increment-->
<p><?php echo ++$value; ?></p>

<hr>
<h2>Comparison Operators</h2>

<?php
/*
 * Greater than  >
 * Greater than or equal >=
 * Less than <
 * Less than or equal <=
 * Equal ==
 * Identical ===
 * Not Equal !=
 * Not Identical !==
 * Not Equal <>
 * */

// Return true or false when using these operators

var_dump(5 <> '5');
?>

<hr>

<h2>Logical Operators</h2>

<?php
/*
 * or || => one side should be true to get true
 * and && => both sides should be true to get true
 * Not !
 * */

$isValid = true;

//var_dump(TRUE && False);

echo TRUE || False;
?>
</body>
</html>




