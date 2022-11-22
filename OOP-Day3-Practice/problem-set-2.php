<?php
    /*
       2. Write a simple PHP class which displays an introductory message like "Hello Fellow coders, I am coder Mike", 
       where "Mike" is an argument value of the method within the class. 
    */
    class Myclass{
        public $message = 'Hello Fellow coders, I am coder ';

        public function introduce($name){
            return $this->message.$name;
        }
    }
    $newmessage = new Myclass;
    echo $newmessage->introduce('Mike');
?>