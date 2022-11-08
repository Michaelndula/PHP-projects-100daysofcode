<?php
/*-----------Sessions-----------*/

/*
    Sessions are a way to store information(within a variable)
    to be used across multiple pages.
    Unlike cookies, sessions are stored on the server.
*/
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="username">UserName: </label>
        <input type="text" name="username" value="">
    </div>
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password" value="">
    </div>
    <input type="submit" name="submit" value="Submit">
</form>



<?php
session_start();

/** ---- $_GET & $_POST Superglobal ------ */
/*
    We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/
if(isset($_POST['submit'])){
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS) ;
    $password = $_POST['password'];

    if($username == 'Mike' && $password == 'password'){
        $_SESSION['username'] = $username;
        header('Location: /PHP-projects-100daysofcode/Day5/extras/dashboard.php');
    }else{
        echo 'Incorrect login';
    }
}

?>