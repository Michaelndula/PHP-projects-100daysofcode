<?php
// //printing an Assotiative array using forach loop
// $person = [
//     'first_name'=>'Michael',
//     'second_name'=>'Ndula',
//     'email_address'=>'michaelndula@gmail.com',
//     'City'=>'Nairobi',
//     'Country'=>'Kenya',
//     'Area_of_Residence'=>'Kephis'
// ];

// foreach ($person as $key => $value) {
//     echo "$key : $value<br>";
// }

//printing a Multidimensional array using foreach loop
$superheroes = array(
    'Spider Man' => array(
        'name'=>'Peter Parker',
        'age'=>'25'
    ),
    'Iron Man' => array(
        'name'=>'Robert Downey Jr.',
        'age'=>'57'  
    ),
    'Bat man' => array(
        'name'=>'Bruce Wayne',
        'age'=>'33'
    ),
);

//printing all keys one by one
$keys = array_keys($superheroes);
//first we print the outer array 
for ($i=0; $i < count($superheroes); $i++) { 
    echo $keys[$i] . "<br>";
    //then we print the inner array after every outer array
    foreach ($superheroes[$keys[$i] ] as $key => $value) {
        echo $key . ":" . $value . "<br>";
    }
}