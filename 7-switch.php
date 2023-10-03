<?php

$userInput = 500;

switch ($userInput) {
    case 1:
        var_dump("Sunday");
        break;
    case 2:
        var_dump("Monday");
        break;
    case 3:
        var_dump("Tuesday");
        break;
    case 4:
        var_dump("Wednesday");
        break;
    case 5:
        var_dump("Thursday");
        break;
    case 6:
        var_dump("Friday");
        break;
    case 7:
        var_dump("Saturday");
        break;
    default:
        echo "Please enter a number between 1-7";
}
