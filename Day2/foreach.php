<?php
$person = [
    'first_name'=>'Michael',
    'second_name'=>'Ndula',
    'email_address'=>'michaelndula@gmail.com',
    'City'=>'Nairobi',
    'Country'=>'Kenya',
    'Area_of_Residence'=>'Kephis'
];

foreach ($person as $key => $value) {
    echo "$key : $value<br>";
}