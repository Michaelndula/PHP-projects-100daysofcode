
<!-- 
if(isset($_POST['registerBtn'])){

	


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
        mysqli_query($conn, "INSERT INTO users VALUES ('{$id}', '{$first_name }', '{$last_name}', '{$email}', '{$city}', '{$country}', '{$password}')");

        $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
        $result = mysqli_query($conn, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        // verify the user's account was created
        $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$email}'");
        if (mysqli_num_rows($query) == 3){
            
            /* IF WE ARE HERE THEN THE ACCOUNT WAS CREATED! YAY! */
            /* WE WILL SEND EMAIL ACTIVATION CODE HERE LATER */

            $success = true;
        }
        else
            $error_msg = 'An error occurred and your account was not created.';
            }
            else
                $error_msg = 'The email <i>'.$email.'</i> is already taken. Please use another.';
               

} -->
<?php
require_once('config.php');
session_start();

// initializing variables
    $id = '';
    $first_name = '';
    $last_name  = '';
    $email = '';
    $city = '';
    $country = '';

// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'register');

// REGISTER USER
if (isset($_POST['registerBtn'])) {
  // receive all input values from the form
  $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
  $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $city = mysqli_real_escape_string($conn, $_POST['city']);
  $country = mysqli_real_escape_string($conn, $_POST['country']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $confirm_password= mysqli_real_escape_string($conn, $_POST['confirm_password']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($first_name)) { array_push($errors, "first_name is required"); }
  if (empty($last_name)) { array_push($errors, "last_name is required"); }
  if (empty($email)) { array_push($errors, "email is required"); }
  if (empty($city)) { array_push($errors, "city is required"); }
  if (empty($country)) { array_push($errors, "country is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if ($password != $confirm_password) {
	array_push($error_msg, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same email
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) {
        array_push($error_msg, 'The email <i>'.$email.'</i> is already taken. Please use another.');
        
    }else{// if user does not exist
        $success = true;
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($error_msg) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (first_name, last_name, email, city, country, password) 
  			  VALUES('$first_name', '$last_name','$email', '$city', '$country', '$password')";
  	mysqli_query($conn, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: registration.php');
  }
}
