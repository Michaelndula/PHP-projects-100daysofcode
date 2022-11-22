<?php
    /*
        3. Write a PHP class that calculates the factorial of an integer. 
    */

    class Factorial{
        protected $_n;

        public function __construct($n){
            if (!is_int($n)) {
                throw new InvalidArgumentException('Not a number or missing argument');
            }
            $this->_n = $n;
        }

        public function result(){
            $factorial = 1;

            for ($i=1; $i <= $this->_n; $i++) {
                $factorial *= $i;
            }
            return $factorial;
        }
    }

    $output = new Factorial(5);
    echo $output->result();

?>