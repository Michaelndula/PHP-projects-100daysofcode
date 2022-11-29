<?php
    /**
     * A class Car 
     * and car model that inherits the Car properties
     */

     class Car{
        public $model;
        public $manufacturer;

        public function __construct($model, $manufacturer) {
            $this->model = $model;
            $this->manufacturer = $manufacturer;
        }

        public function setModel() {
            echo "I am {$this->model}, I was manufactured by {$this->manufacturer}";
        }
     }

     class Model extends Car{
        public function intro(){
            echo "Am I a car or a manufacturer?" . "\n";
        }
     }

     $Model = new Model("V8", "Land Cruiser");
     $Model->intro();
     $Model->setModel();

?>