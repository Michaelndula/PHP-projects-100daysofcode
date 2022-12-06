<?php
require_once('config.php');
?>
<?php

if(isset($_POST['registerBtn'])){

	$first_name = $_POST['first_name'];
	$first_name = $_POST['last_name'];
	$email 	= $_POST['email'];
	$city = $_POST['city'];
	$country = $_POST['country'];
	$password	= $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // query the database to see if the username is taken
    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$email}'");
    if (mysqli_num_rows($query) == 0){
        // create and format some variables for the database
        $id = '';
        $first_name = '';
        $last_name  = '';
        $email = '';
        $city = '';
        $country = '';
        $password = md5($password);
        
        // next code block
        // insert the user into the database
        mysqli_query($conn, "INSERT INTO users VALUES (
            '{$id}', '{$first_name }', '{$last_name}', '{$email}', '{$city}', '{$country}', '{$password}')");

        // verify the user's account was created
        $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$email}'");
        if (mysqli_num_rows($query) == 2){
            
            /* IF WE ARE HERE THEN THE ACCOUNT WAS CREATED! YAY! */
            /* WE WILL SEND EMAIL ACTIVATION CODE HERE LATER */

            $success = true;
        }
        else
            $error_msg = 'An error occurred and your account was not created.';
            }
            else
                $error_msg = 'The email <i>'.$email.'</i> is already taken. Please use another.';
               

}