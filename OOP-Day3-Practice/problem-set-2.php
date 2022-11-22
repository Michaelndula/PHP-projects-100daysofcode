<?php
    /*
       2. Write a simple PHP class which displays an introductory message like "Hello All, I am Mike", 
       where "Mike" is an argument value of the method within the class. 
    */
    class Myclass{
        
        public $message = 'Hello All, I am ';

        public function introduce($name){
            return $this->message.$name;
        }
    }
    $mymessage = new Myclass;
    echo $mymessage->introduce('Mike');
?>