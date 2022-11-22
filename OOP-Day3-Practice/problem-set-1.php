<?php
    /*
        1. Write a simple PHP class which displays the following string.
        'MyClass class has initialized !'
    */

    class Myclass{
        public function __construct(){
            echo 'A constructor allows you to initialize an object\'s properties upon creation of the object. If you create a __construct() function, PHP will automatically call this function when you create an object from a class.';
        }
    }
    $output = new Myclass;
?>