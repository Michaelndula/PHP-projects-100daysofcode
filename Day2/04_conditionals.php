<?php
//conditionals are controlled structures
/**
 * < Less than
 * > Greater than
 * <= Less than ot equal to
 * >= Greater than or equal to
 * == Equal to
 * === Identical to
 * != Not equal to
 * !== Not identical to
 * 
 * * If statement syntax
 * if(condition){
 *  // code to be executed
 * }
 */

//  $age = 16;

//  if ($age >= 18){
//     echo 'Old enough to VOTE';
//  }else{
//     echo 'Sorry you are not allowed to vote';
//  }

// $t = date("H");
// if($t < 12){
//     echo 'Good morning user';
// }elseif($t < 17){
// echo 'Good Afternoon user';
// }else{
//     echo 'Good Evening user';
// }

$posts = ['Michael Ndula'];

// if (!empty($posts)) {
//     echo $posts[0];
// }else{
//     echo 'No Posts yet!';
// }

//ternary option
// echo !empty($posts) ? $posts[0] : 'No Posts';
// $firstPost = !empty($posts) ? $posts[0] : 'No Posts';

// $firstPost = !empty($posts) ? $posts[0] : null;

$firstPost = $posts[0] ?? null;
echo $firstPost;