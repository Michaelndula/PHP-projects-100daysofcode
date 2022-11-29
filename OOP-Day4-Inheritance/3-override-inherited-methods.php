<?php
    /**
     * PHP - Overriding Inherited Methods
     * Inherited methods can be overridden by redefining the methods (use the same name) in the child class.
     * Look at the example below. The __construct() and setModel() methods in the child class (Model) 
     * will override the __construct() and setModel() methods in the parent class (Car):
     * 
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
        public $year;

        public function __construct($model, $manufacturer, $year) {
            $this->model = $model;
            $this->manufacturer = $manufacturer;
            $this->year = $year;
        }

        public function setModel() {
            echo "I am {$this->model}, I was manufactured by {$this->manufacturer}, {$this->year} model";
        }
       
     }

     $Model = new Model("V8", "Land Cruiser", 2022);
     $Model->setModel();

?>