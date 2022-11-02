<?php
/** ---- $_GET & $_POST Superglobal ------ */
/*
    We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/
if(isset($_POST['submit'])){
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS) ;
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS) ;
    echo $name;
    echo $age;
}

?>

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