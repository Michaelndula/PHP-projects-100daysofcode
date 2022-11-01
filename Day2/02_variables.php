<?php
/*---------PHP Data Types --------*/
/*
    - String: series of characters surrounded by quotes.
    - Integer: Whole numbers
    - Float: Decimal numbers.
    - Boolean: True or False.
    - Array: Special variable, which can hold more than one value.
    - Object: A class.
    - NULL: Empty variable.
    - Resource: Special variable that holds a resource.
*/

/*------- Variable Rules --------- */
/**
 * - Variables must be prefixed with '$'
 * - Variables must start with a letter or the underscore Character
 * - Variables can't start with a number
 * - variables can only contain alpha-numeric character amd underscores (A-z, 0-9. amd _)
 * - variables are case-sensitive ($name and #NAME are two different variables)
 */

 //strings
 $string1 = "Hello ";
 $string2 = 'World'; 

 echo $string1.$string2;  echo '<br/>';
 
 //integers
 $int1 = 42;
 $int2 = -20;

 echo $int1 + $int2; echo '<br/>';

 //boolean
 $has_kids = true;
 echo $has_kids;