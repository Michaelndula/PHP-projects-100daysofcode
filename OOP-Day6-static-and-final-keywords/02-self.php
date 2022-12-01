<?php
/**
 * The self keyword is needed to access a static property from a static method in a class definition.
 */
class Person{
    static $personAge = 24;

    static function getPerson(){
        echo self::$personAge;
    }
 }

 Person::getPerson();

?>