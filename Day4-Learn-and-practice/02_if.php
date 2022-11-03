<?php
//Output "1" if $a is equal to $b, print "2" if $a is greater than $b, otherwise output "3".

$a = 40;
$b = 41;

if ($a == $b) {
    echo "$a and $b are equal";
}elseif ($a > $b) {
    echo "$a is greater than $b";
}else {
    echo "$a is neither equal or greater than $b";
}