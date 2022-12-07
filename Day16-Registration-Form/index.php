<?php
    include 'header.php';
	// define variables and set them to empty string
	$first_name = $last_name = $email = $city = $country = $password = "";

	if(isset($_POST['registerBtn'])){
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$city = $_POST['city'];
		$country = $_POST['country'];
		$password = $_POST['password'];
	}

	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

?>

<div class="signup-form">
    <form action="<?php echo htmlspecialchars('registration.php');?>" class="form" method="post">
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
