<?php
 require_once ('confirmation.php');
 include 'header.php';

 // define variables and set to empty values
$nameErr = $emailErr = $city = $county = $passwordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["first_name"])) {
	   $nameErr = "Name is required";
   } else {
	   $name = test_input($_POST["first_name"]);
	   // check if name only contains letters and whitespace
	   if (!preg_match("/^[a-zA-Z-' ]*$/",$first_name)) {
		   $nameErr = "Only letters and white space allowed";
	   }
   }
}
// form validation: ensure that the form is correctly filled ...
 // by adding (array_push()) corresponding error unto $errors array
 if (empty($first_name)) { array_push($error_msg, "first_name is required"); }
 if (empty($last_name)) { array_push($error_msg, "last_name is required"); }
 if (empty($email)) { array_push($error_msg, "email is required"); }
 if (empty($city)) { array_push($error_msg, "city is required"); }
 if (empty($country)) { array_push($error_msg, "country is required"); }
 if (empty($password)) { array_push($error_msg, "Password is required"); }
 if ($password != $confirm_password) {
   array_push($error_msg, "The two passwords do not match");
 }
?>

<div class="signup-form">
    <form action="registration.php" class="form" method="POST">
		<h2>Sign Up</h2>
		<p>Please fill in this form to create an account!</p>
		<div class="form-group">
        <?php
            // check to see if the user successfully created an account
            if (isset($success) && $success == true){
                echo '<p color="green">Yay!! Your account has been created. <a href="./login.php">Click here</a> to login!<p>';
            }
            // check to see if the error message is set, if so display it
            else if (isset($error_msg))
                echo '<p color="red">'.$error_msg.'</p>';
            
        ?>
        </div>
        <div class="form-group">
			<div class="row">
				<div class="col-xs-6"><input type="text" class="form-control" name="first_name" placeholder="First Name" autocomplete="off"></div>
				<div class="col-xs-6"><input type="text" class="form-control" name="last_name" placeholder="Last Name" autocomplete="off"></div>
			</div>        	
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" autocomplete="off">
			<span><?php echo $error_msg ?></span>
        </div>

        <div class="form-group">
        <div class="row">
            <div class="col-xs-6"><input type="text" class="form-control" name="city" placeholder="City"></div>
            <div class="col-xs-6"><input type="country" class="form-control" name="country" placeholder="Country"></div>
        </div>
        </div> 
		
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off" >
        </div>  
        <div class="form-group">
		<p>password must be at least 5 characters and<br /> have a special character, e.g. !#$.,:;()</font></p>
	    </div>	      
		<div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" autocomplete="off">
        </div>        
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" name="registerBtn" class="btn btn-primary btn-lg">Sign Up</button>
        </div>
    </form>
	<div class="hint-text">Already have an account? <a href="#">Login here</a></div>
</div>
</body>
</html>
