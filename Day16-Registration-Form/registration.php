<html>
    <body>
     <h2>Hello  <?php echo $_POST['first_name'];?>  Nice to see you</h2>
     <h4>Displayed are you inputs:</h4>
     <p>
    <?php
        $first_name = $last_name = $email = $city = $country = $password = "";
        echo 'Full Name: '. $_POST['first_name'] . " ". $_POST['last_name'];
        echo "<br>";
        echo 'E-mail: '. $_POST['email'];
        echo "<br>";
        echo 'City: ' . $_POST['city'];
        echo "<br>";
        echo 'Country: ' . $_POST['country'];
        echo "<br>";
        echo 'Password: ' . $_POST['password'];
    ?>
    </p>
    </body>
</html>