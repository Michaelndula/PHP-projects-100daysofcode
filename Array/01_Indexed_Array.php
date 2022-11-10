<?php
/*------------INDEXED ARRAY-----------*/

/*
index is represented by number which starts from 0. We can store number, string and object in the PHP array. 
All PHP array elements are assigned to an index number by default.

There are two ways to define indexed array:

//1st way:

$colors=array("red","green","orange","yellow");  

//2nd way:

$colors[0]="red";  
$colors[1]="green";  
$colors[2]="orange";  
$colors[3]="yellow";  
*/

//TO-DO
/*
1. $color = array('white', 'green', 'red', 'blue', 'black');
Write a script which will display the following string;
"The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, 
 the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
 and the words 'red', 'green' and 'white' will come from $color.
*/

// set our array of colors
$colors=array('white', 'green', 'red', 'blue', 'black' );

// echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $colors[2] carpet, the $colors[1] lawn, the $colors[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

/*
2. $color = array('white', 'green', 'red'')
Write a PHP script which will display the colors in the following way :
Output :
white, green, red,

green
red
white
*/
$color = array('white', 'green', 'red');

foreach ($color as $c) {
    echo "$c, ";
}

//sort the array in ascending order
sort($color);

echo "<ul>";
foreach ($color as $y){
    echo "<li>$y</li>";
}
echo "</ul>";