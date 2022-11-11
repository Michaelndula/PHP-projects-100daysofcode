<?php

//instantiate a new user object
class User
{
    //Create properties
    public $name;
    public $username;
    public $followerCount;
}

$mikeObject = new User();

$mikeObject->name = 'Michael Ndula';
$mikeObject->username = '@michaelndula';
$mikeObject->followerCount = 12;

print_r($mikeObject);