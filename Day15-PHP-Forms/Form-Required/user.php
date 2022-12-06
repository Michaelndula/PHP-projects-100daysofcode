<html>
    <body>
     <h2>Hello  <?php echo $_POST['name'];?>  Nice to see you</h2>
     <h4>Displayed are you inputs:</h4>
     <p>
    <?php
        $name = $email = $gender = $comment = $website = "";
        echo 'Full Name: '. $_POST['name'];
        echo "<br>";
        echo 'E-mail: '. $_POST['email'];
        echo "<br>";
        echo 'Website: ' . $_POST['website'];
        echo "<br>";
        echo 'Your Comment: ' . $_POST['comment'];
        echo "<br>";
        echo 'Gender: ' . $_POST['gender'];
    ?>
    </p>
    </body>
</html>
