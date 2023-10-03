<?php

// Run the code multiple times

/*
 * while loop
 * do..while
 * for
 * foreach
 * */

// 1- While loop => run the code block while the condition is true

$counter = 20;

// Be aware from infinite loops
while ($counter < 10) {
//    echo $counter . "<br/>";

//    $counter += 1;
    $counter ++ ;
//    $counter = $counter + 1;
}

// 2- do..while
do {
//    echo $counter . "<br/>";
    $counter ++ ;
} while($counter <= 10);

// 3- For loop

for($counter = 0; $counter < 10; $counter++) {
    // Code to be executed
//    echo $counter . "<br/>";
}

$array = [1, 2, 3, 4, 5];
$lastIndex = 4;

for ($counter = 0; $counter <= count($array) - 1 ;$counter++) {
//    echo $array[$counter] . "<br/>";
}

for ($counter = 0; $counter < count($array) ;$counter++) {
//    echo $array[$counter] . "<br/>";
}

// Break and continue keywords

for ($x=0; $x<= 20; $x++) {
    if ($x === 5) {
        break; // Breaks the loop
    }
//    echo $x . "<br/>";
}

for ($x=0; $x<= 20; $x++) {
    if ($x === 5) {
        continue; // Jumps to next iteration
    }
//    echo $x . "<br/>";
}


// Foreach loop
$array = [1, 2, 3, 4, 5, null, 10];

foreach ($array as $value) {
//    echo $value . "<br/>";
}

$users = [
    'key1' => [
        'name' => 'mohammad',
        'email' => 'mohammad@mail.com',
        'mobile_number' => 5658787,
        'is_valid' => false,
        'age' => 10,
        'hobbies' => ['football', 'reading']
    ],
    'key2' => [
        'name' => 'Omar Kamal',
        'email' => 'omar@mail.com',
        'mobile_number' => 20202020,
        'is_valid' => true,
        'age' => 30
    ],
    'key3' => [
        'name' => 'Ahmad',
        'email' => 'ahmad@mail.com',
        'mobile_number' => 5068977,
        'is_valid' => false,
        'age' => 20
    ]
];

foreach ($users as $key => $user) {
    echo "The key is {$key} and the name is {$user['name']}" . "<br/>";
}

