<?php
//Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.
/*
The PHP superglobal variables are:

$GLOBALS
$_SERVER - contains information about the server environment.
$_REQUEST - containf information about variables passed through the form or url
$_POST - contains information about variables passed through a form
$_GET - contains information about variables passed through a url or a form
$_FILES - contains information about files uploaded to script
$_ENV - contains information about the environment variable
$_COOKIE - containd information about variables passed through a cookie
$_SESSION - contains information about variables passed through a session
*/

// var_dump($_SERVER);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Host: <?php echo $_SERVER['HTTP_HOST']; ?></li>
        <li>Document Root: <?php echo $_SERVER['DOCUMENT_ROOT']; ?></li>
        <li>Server Name: <?php echo $_SERVER['SERVER_NAME']; ?></li>
        <li>Current File Dir: <?php echo $_SERVER['PHP_SELF']; ?></li>
        <li>Request URI: <?php echo $_SERVER['REQUEST_URI']; ?></li>
        <li>Server Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
        <li>Client info: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></li>
        <li>Remote Address: <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
        <li>Remote Port: <?php echo $_SERVER['REMOTE_PORT']; ?></li>
    </ul>
</body>
</html>

