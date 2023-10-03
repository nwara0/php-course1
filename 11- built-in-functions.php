<?php
// Functions by the language

// Some string functions
$name = "                                     Mohammad Khalid       ";

$nameLength = strlen(trim($name));
$wordCount = str_word_count($name, 2);
$position = strpos($name, 'M'); // 0 => position found
$position = strpos($name, 'M', 1); // false => position not found

//if ($position === false) {
//    echo "not found";
//} else {
//    echo $position;
//}

echo $nameLength;
