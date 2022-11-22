<?php
    /*
        5. Calculate the difference between two dates using PHP OOP approach.
        Sample Dates : 1981-11-03, 2013-09-04
        Expected Result : Difference : 31 years, 10 months, 1 days
    */

    $sdate = new DateTime("1998-10-28");
    $edate = new DateTime("2022-11-22");
    $interval = $sdate->diff($edate);
    echo "Difference : " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days ";
?>
