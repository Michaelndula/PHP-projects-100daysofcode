<?php
    
    //Output Hello Michael if a variable is larger that the other or else greet the user. */

    $num1 = 1;
    $num2 = 23;
    $time = date("H");
    $user = 'Michael';

    if ($num1 > $num2) {
        echo "Hello Michael";
    }else {
        if ($time < 12) {
            echo "Good Morning $user";
        }elseif($time < 17){
            echo "Good afternoon $user";
        }else{
            echo "Good evening $user";
        }
    }