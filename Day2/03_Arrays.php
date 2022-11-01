<?php
//simple Array objects
$numbers = [1,44,67,20];
$fruits = array('Mango', 'Orange', 'Banana', 'Pineapple');

// print_r($fruits);
// var_dump($fruits);

// //output a specific fruit from the Array object
// echo $fruits[2];

//Assotiative arrays
$colors = [
    1 => 'red',
    4 => 'green',
    6 => 'yellow'
];

// echo $colors[4];

$person = [
 'first_name' => 'Michael',
 'last_name' => 'Ndula',
 'email' => 'michael@gmail.com'
];

// echo $person['first_name'];

//Multi_dimensional Arrays, Array within an Arrays array
$people = [
    [
        'first_name' => 'Michael',
        'last_name' => 'Ndula',
        'email' => 'michael@gmail.com'
    ],
    [
        'first_name' => 'Johnson',
        'last_name' => 'Shivachi',
        'email' => 'johnshiv@gmail.com'
    ],
    [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'johndoe@gmail.com'
    ]
];

// echo $people[1]['email'];
//display the arrays in a multi_dimensional arrays
var_dump(json_encode($people));