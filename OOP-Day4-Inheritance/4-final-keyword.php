<?php

    /**
     * PHP - The final Keyword
     * The final keyword can be used to prevent class inheritance or to prevent method overriding.
     * 
     */

    class Car{
        public $model;
        public $manufacturer;

        public function __construct($model, $manufacturer) {
            $this->model = $model;
            $this->manufacturer = $manufacturer;
        }

        final public function setModel() {
            echo "I am {$this->model}, I was manufactured by {$this->manufacturer}";
        }
     }

     class Model extends Car{
        public $year;

        public function __construct($model, $manufacturer, $year) {
            $this->model = $model;
            $this->manufacturer = $manufacturer;
            $this->year = $year;
        }

        public function setModel() { // cannot inherit the parent method
            echo "I am {$this->model}, I was manufactured by {$this->manufacturer}, {$this->year} model";
        }
       
     }

     $Model = new Model("V8", "Land Cruiser", 2022);
     $Model->setModel(); // Fatal error: Cannot override final method Car::setModel()

?>