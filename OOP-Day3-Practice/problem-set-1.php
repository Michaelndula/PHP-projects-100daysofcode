<?php
    /*
        1. Write a simple PHP class which displays the following string.
        'MyClass class has initialized !'
    */

    class Myclass{
        public function __construct(){
            echo 'MyClass class has initialized !';
        }
    }
    $output = new Myclass;
?>