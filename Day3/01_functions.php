<?php
//function to register a user
/**Create a function called registerUser() that will have an argument $email*/
function registerUser($email) {
    echo $email . ' registered';
}
//call the function passing in a parameter
// registerUser('Michael Ndula');

/**A function that adds two numbers */
function sum($num1, $num2){
    return $num1 + $num2;
}

// echo sum(20, 50);

//Alternatively we can use 
function add($n1 = 4, $n2 = 70){
    return $n1 + $n2;
}

// $sum = add();
// echo $sum;

/**Anonymous functions */
$subtract = function($s1,$s2){
    return $s1 - $s2;
};

// echo $subtract(20,15);

/**A shorter way of going about the anonymous functions */
$multiply = fn($x1, $x2) => $x1 * $x2;

// echo $multiply(24,57);

//Have fun with code
function mikeCodes($firstName, $lastName){
    echo $firstName . " " . $lastName . ' Rocks';
}

mikeCodes('Michael', 'Ndula');