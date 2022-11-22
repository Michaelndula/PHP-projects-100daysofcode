<?php
    /*
        4. Write a PHP class that sorts an ordered integer array with the help of sort() function.
        Sample array : array(11, -2, 4, 35, 0, 8, -9)
        Output : Array ( [0] => -9 [1] => -2 [2] => 0 [3] => 4 [4] => 8 [5] => 11 [6] => 35 )
    */

    class SortArray{

        protected $_asort;

        public function __construct(array $asort){
            $this->_asort = $asort;
        }

        public function allsort(){
            $sorted = $this->_asort;
            sort($sorted);
            return $sorted;
        }
    }
    $sortarray = new SortArray(array(11, -2, 4, 35, 0, 8, -9));
    print_r($sortarray->allsort())."\n";
?>