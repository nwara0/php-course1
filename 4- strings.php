<?php
// Sequence of Characters inside single or double quotes

// Both are valid
$variable1 = "Omar Kamal";
$variable2 = 'Omar Kamal';

// When starting with single you should end with single and the same for double
//$variable3 = "New variable';

// Concatenation
$firstName = "Omar";
$lastName = "Kamal";

//$fullName = $firstName . " " .  $lastName;
$fullName = '$firstName $lastName'; // Interpolation is not allowed in single quotes
$fullName = "$firstName $lastName"; // Interpolation

$number = 20;

$welcomeMessage = "Hello {$number} from php course, {$fullName}"; // Best Practice

