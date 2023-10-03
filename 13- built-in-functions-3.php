<?php

$cars = ['BMW', 'Toyota', 'Mercedes'];

// Array push => push an element at the end of the array

var_dump($cars);

array_push($cars, 'Mazda');

echo "<br/>";

var_dump($cars);

// Array unshift => push an element at the start of the array

array_unshift($cars, 'Ferrari');
echo "<br/>";
var_dump($cars);

// Remove the last element in the array => Array pop

array_pop($cars);
echo "<br/>";
var_dump($cars);


// Remove the first element in the array => Array shift
array_shift($cars);
echo "<br/>";
var_dump($cars);

