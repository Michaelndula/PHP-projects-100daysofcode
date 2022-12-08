<?php
 require_once ('config.php');

 //create connection object
 $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

 //check if connection is established
 if($conn === false){
    die("Connection is not established" . mysqli_connect_error());
 }


 //execute QUERIES
 $query = "SELECT * FROM users";

 //fetching data
 $result = $conn->query($query);

 if($result->num_rows > 0){
    echo "Record was found" .  "<br>";
    //output data for each row
    while($row = $result->fetch_assoc()){
        echo "id: " . 
        $row["id"]. " first_name: ".
        $row["first_name"]. " last_name: ".
        $row["last_name"]. " Email: ".
        $row["email"]. " City: ".
        $row["city"]. " Country: ".
        $row["country"]. " Password: ".
        $row["password"]. "<br>";
    }
 }else{
    echo "No results";
}

//close the connection
$conn->close();

?>