<?php
    /**
     * 6. Write a PHP Calculator class which will accept two values as arguments, then add them, 
     * subtract them, multiply them together, or divide them on request.
     */

    class Calculator{
        public $num1;
        public $num2;

        public function __construct($num1, $num2){
            $this->num1 = $num1;
            $this->num2 = $num2;
        }

        public function add(){
            $addition = 0;
            $addition = $this->num1 + $this->num2;
            return $addition;
        }
        public function sub(){
            $substract = 0;
            $substract = $this->num1 - $this->num2;
            return $substract;
        }
        public function mul(){
            $multiply = 0;
            $multiply = $this->num1 * $this->num2;
            return $multiply;
        }
        
        public function div(){
            $divide = 0;
            $divide = $this->num1 / $this->num2;
            return $divide;
        }
    }

    $myCalc = new Calculator(12,6);
    echo $myCalc->add();
    echo $myCalc->sub();
    
    echo $myCalc->mul();
    echo $myCalc->div();
?>