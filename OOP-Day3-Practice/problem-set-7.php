<?php
/**
 * 7. Write a PHP script to convert a string to Date and DateTime.
 *Sample Date : '12-01-2022'
 *Expected Output : 2022-12-01
 *Note : PHP considers '/' to mean m/d/Y format and '-' to mean d-m-Y format.
 */

    $dt = DateTime::createFromFormat('m-d-Y', '12-01-2022')->format('Y-m-d');
    echo $dt;
?>