<?php
/**
 * A static property or method is accessed by using the scope resolution operator :: 
 * between the class name and the property/method name.
 */

 class Person{
    static $personAge = 24;
 }

 echo Person::$personAge;
?>