<?php
    declare(strict_types=1);

    function reverseString(string $text):string{
        return strrev($text);
    }

    $text = "Cool";
    echo reverseString($text);
?>