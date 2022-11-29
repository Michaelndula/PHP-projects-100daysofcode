<?php
    /**
     * PHP - Inheritance and the Protected Access Modifier
     * protected properties or methods can be accessed within the class and by classes derived from that class.
     * What does that mean?
     */

    class Car{
        public $model;
        public $manufacturer;

        public function __construct($model, $manufacturer) {
            $this->model = $model;
            $this->manufacturer = $manufacturer;
        }

        protected function setModel() {
            echo "I am {$this->model}, I was manufactured by {$this->manufacturer}";
        }
     }

    //  class Model extends Car{
    //     public function intro(){
    //         echo "Am I a car or a manufacturer?" . "\n";
    //     }
    //  }
     class Model extends Car{
        public function intro(){
            echo "Am I a car or a manufacturer?" . "\n";

            //call protected method from within the derived class - ok
            $this->setModel();
        }
     }

     $Model = new Model("V8", "Land Cruiser"); //okay because it is public
     $Model->intro(); // Okay because it is public
    // $Model->setModel(); //Fatal error: Uncaught Error: Call to protected method Car::setModel() from context.

?>