<?php
 require_once ('config.php');
?>
<html>
    <body>
     <h2>Hello  <?php echo $_REQUEST['first_name'];?>  Nice to see you</h2>
     <h4>Displayed are you inputs:</h4>
     <p>
    <?php
        $first_name = $last_name = $email = $city = $country = $password = "";
        
		$conn = mysqli_connect($servername, $username, $password, $dbname);

		//check connection status
		if($conn === false){
			die("Error: could not connect to server" . mysqli_connect_error());
		}
		if(isset($_POST['registerBtn'])){
		//Take the form input data
		$id = "";
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$email = $_REQUEST['email'];
		$city = $_REQUEST['city'];
		$country = $_REQUEST['country'];
		$password = $_REQUEST['password'];

		//insert the data into our db
		$sql = "INSERT INTO users VALUES ('$id', '$first_name', '$last_name', '$email', '$city', '$country', '$password')";

		//check if query is successful
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
			. " Please browse your localhost php my admin"
			. " to view the updated data</h3>";

			echo nl2br("\n$first_name\n $last_name\n "
			. "$email\n $city\n $country\n $password");
		}else{
			echo "ERROR: Hush! Sorry $sql. "
			. mysqli_error($conn);
		}
	}

		//close connection
		mysqli_close($conn);
        
    ?>
    </p>
    </body>
</html>