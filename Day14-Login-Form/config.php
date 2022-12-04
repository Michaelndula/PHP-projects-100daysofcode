<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'signup');

/*Attempt to connect to the database */

$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

//check connection
if(!$conn){
    die("Could not connect to the database. " . mysqli_connect_error());
}
?>