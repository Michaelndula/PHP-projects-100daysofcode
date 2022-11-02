<?php
/** ---- $_GET & $_POST Superglobal ------ */
/*
    We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/
if(isset($_POST['submit'])){
    echo $_POST['name'];
    echo $_POST['age'];
}

?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Mike&age=24">click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name" value="">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age" value="">
    </div>
    <input type="submit" name="submit" value="Submit">
</form>