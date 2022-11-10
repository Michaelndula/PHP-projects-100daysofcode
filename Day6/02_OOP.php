<?php
/*-----------Object Oriented Programming---------*/

/*
    From PHP5 onwards you can write PHP in either a procedural
    or object oriented way. OOP consists of classes that can hold
    "Properties" and "Methods". Objects can be created from classes.
*/

// Properties are attributes that belong to a class.

// Access Modifiers: Public, Private, Protected.
// public - can be accessed from anywhere
// private - can only be accessed within the class
// protected - can only be accessed from inside the class and by inheriting classes

class User{
    public $name;
    public $email;
    public $password;

    // A constructor is a method that runs when an object is created
    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    // Method is a function that belongs to a class

    function set_name($name){
       $this->name=$name; 
    }

    function get_name(){
        return $this->name;
    }
}

//Instantiate a user object
$user1 = new User('Mike', 'michaelndula@gmail.com', '1234');
echo $user1->email;
echo $user1->name;

// Inheritance
