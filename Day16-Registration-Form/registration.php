<?php
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