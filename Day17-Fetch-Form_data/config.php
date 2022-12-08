<?php
    //initialize db variables
    $db_server = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'register';

    //create connection
    $conn = new mysqli($db_server, $db_user, $db_pass, $db_name);

    //check connection status
    if ($conn->connect_error){
        die('Connection error: ' . $conn->connect_error);
    }
?>