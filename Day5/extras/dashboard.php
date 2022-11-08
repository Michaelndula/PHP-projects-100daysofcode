<?php
    session_start();

    if(isset($_SESSION['username'])){
        echo '<h1> Welcome ' . $_SESSION['username'] . '</h1>';
        echo '<a href="/PHP-projects-100daysofcode/Day5/extras/Logout.php">Logout</a>';
    }else {
        echo '<h1> Welcome Guest</h1>';
        echo '<a href="/PHP-projects-100daysofcode/Day5/02_sessions.php">Login</a>';
    }

