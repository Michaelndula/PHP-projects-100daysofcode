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
        // We assign the properties passed in from the outside to the properties we created inside the class.
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
// echo $user1->email;
// echo $user1->name;

// Inheritance
/*
  Inheritence is the ability to create a new class from an existing class.
  It is achieved by creating a new class that extends an existing class.
*/
class Employee extends User{
    public function __construct($name, $email, $password, $title){
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title(){
        return $this->title;
    }
}

//Instantiate
$employee1 = new Employee('Mike', 'Mike@gmail.com', '123435', 'Manager');

echo $employee1->get_name();
echo $employee1->email;
echo $employee1->get_title();