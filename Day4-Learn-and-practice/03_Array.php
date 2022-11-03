<?php
    /** Working with arrays */
    // 1. Count the number of items in  an array.

    $electronics = ['Computer', 'Phone', 'Laptop', 'SmartWatch', 'Television'];

    echo count($electronics);

    // 2. Output the second item in the $tronics array.
    echo $electronics[1];

    //3. add items to the $tronics array
    $electronics[] = 'Radio';
    array_push($electronics, 'Water');
    array_unshift($electronics, 'One');
    print_r($electronics);