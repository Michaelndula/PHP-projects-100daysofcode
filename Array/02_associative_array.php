<?php
/*-----------------PHP ASSOCIATIVE ARRAY----------------*/
/*
We can associate name with each array elements in PHP using => symbol.

There are two ways to define associative array:

// 1st way:

$salary=array("Sonoo"=>"350000","John"=>"450000","Kartik"=>"200000"); 

// 2nd way:

$salary["Sonoo"]="350000";  
$salary["John"]="450000";  
$salary["Kartik"]="200000";   
*/

//TO-DO
/*
3. $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", 
"Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", 
"Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", 
"Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", 
"Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", 
"Austria" => "Vienna", "Poland"=>"Warsaw") ;

Create a PHP script which displcays the capital and country name from the above array $ceu. 
Sort the list by the capital of the country.

Sample Output :
The capital of Netherlands is Amsterdam 
The capital of Greece is Athens 
The capital of Germany is Berlin 
*/

$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", 
"Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", 
"Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", 
"Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", 
"Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", 
"Austria" => "Vienna", "Poland"=>"Warsaw");

//Sort the list by the capital of the country.
asort($cue);

foreach ($ceu as $country => $capital) {
    echo "The capital of $country is $capital <br>";
}