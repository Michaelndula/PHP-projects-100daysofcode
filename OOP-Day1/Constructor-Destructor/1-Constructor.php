<?php
    /**
     * PHP OOP - Constructor
     * The __construct Function
     * A constructor allows you to initialize an object's properties upon creation of the object.
     * If you create a __construct() function, PHP will automatically call this function when you create an object from a class.
     * Notice that the construct function starts with two underscores (__)!
     */

     class Fruit{
        public $color;
        public $name;

        public function __construct($color, $name){
            $this->color = $color;
            $this->name = $name;
        }

        public function getFruitName(){
            return $this->name;
        }
        public function getFruitColor(){
            return $this->color;
        }
     }

     $banana = new Fruit("Banana", "Yellow");
     echo $banana->getFruitName();
     echo $banana->getFruitColor();
?>