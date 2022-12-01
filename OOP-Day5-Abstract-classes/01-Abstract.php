<?php

    /**
     * PHP Abstract Classes
     * Abstract functions can only appear in an abstract class.
     * A class inheriting from an abstract class must implement all the abstract methods.
     */

    abstract class Fruit { 
        private $color; 
        
        abstract public function eat(); 
        
        public function setColor($c) { 
            $this->color = $c; 
        } 
    } 

    class Apple extends Fruit {
        public function eat() {
            echo "Omnomnom";
        }
    }

    $obj = new Apple();
    $obj->eat();
?>