<?php
/**String functions */

$string = 'Michael ndula';

//finding the length of the string
echo strlen($string);
echo '<br/>';

//finding the position of a character in the string
echo strpos($string, 'a');
echo '<br/>';

//finding the last occurrence of a character in the string
echo strrpos($string, 'a');
echo '<br/>';

//reverse the string
echo strrev($string);
echo '<br/>';

//convert all characters to lowercase in the string
echo strtolower($string);
echo '<br/>';

//convert all characters to UPPERCASE in the string
echo strtoupper($string);
echo '<br/>';

//UPPERCASE the first character in the string
echo ucwords($string);
echo '<br/>';

//string replace
echo str_replace('Michael', 'Ndula', $string);
echo '<br/>';

//return portion af a string specified by the offset and length
echo substr($string, 0, 5);
echo substr($string, 5);
echo '<br/>';

//start with
if(str_starts_with($string, 'Michael')){
    echo 'YES';
}
echo '<br/>';

//Ends with
if(str_ends_with($string, 'la')){
    echo 'YES';
}
echo '<br/>';