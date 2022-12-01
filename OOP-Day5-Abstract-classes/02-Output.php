<?php

/**
 * What is the output of the following code?
 */

abstract class Calc { 
    abstract public function calculate($param); 
    protected function getConst() { return 4; }
  } 
  class FixedCalc extends Calc {
    public function calculate($param) {
      return $this->getConst() + $param; //Output = 42
    }
  }
  $obj = new FixedCalc();
  echo $obj->calculate(38); 

?>