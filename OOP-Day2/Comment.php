<?php
/*
    You'll use constructors to do whatever should always be done
    and done first-when an object of this class is made.
*/
class Comment{
    public $text;
    public $userId;

    public function __construct($text, $userId){
        $this->text = $text;
        $this->userId=$userId;
    }
}