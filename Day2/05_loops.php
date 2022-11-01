<?php
//loops executes code when a particular condition is methods
/**------- For Loop --------- */
/*
 ** For Loop syntax
 for(initialize; condition; increment){
   //code to be executed
}
*/

// for ($i=0; $i <= 10; $i++) { 
//     echo 'Number ' . $i . '<br>';
// }


/**------- While Loop --------- */
/*
 ** While Loop syntax
 while(condition){
   //code to be executed
}
*/

// $int = 1;
// while ($int <= 20) {
//     echo 'int ' . $int . '<br>';
//     $int++;
// }

/**------- Do While Loop --------- */
/*
 ** Do While Loop syntax
 do{
    //code to be executed
 }
 while(condition);
 do...while loop will always execute the block of code once even if the condition is false
*/

// $x = 1;

// do {
//     echo 'int ' . $x . '<br>';
//     $x++;
// } while ($x <= 10);


/**------- Foreach --------- */
/*
 ** Foreach Loop syntax
 foreach($array as $value){
   //code to be executed
}
*/

$posts = ['First Post', 'Second Post', 'Third Post'];

// //output using for loop syntax
// for($x=0; $x < count($posts); $x++){
//      echo $posts[$x];
// }

//output using foreach loop
foreach($posts as $index => $post){
    echo $index . '-' . $post . '<br>';
}