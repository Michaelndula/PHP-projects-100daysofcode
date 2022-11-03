<?php

    /*$user = [
        'index' => '1',
        'name' => 'Michael',
        'Gender' => 'Male',
        'Age' => '24'
    ];

    print_r($user);
    */

    $studentMarks = [
        'Maths' => '84',
        'Physics' => '75',
        'English' => '90',
        'Kiswahili' => '79',
        'Chemistry' => '67',
        'Biology' => '58',
        'History' => '56',
        'Humanities' => '80'
    ];

    

    echo "Looping through using foreach loop <br>";

    foreach($studentMarks as $subject => $Marks){
        echo "Student got ". $Marks . " in " . $subject . "<br>";
    }

    print_r($studentMarks);
