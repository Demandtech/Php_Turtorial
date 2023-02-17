<?php
  /* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/



/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/


/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/




$age = 20;

// if($age >= 18){
//  echo "You are {$age}, you are old enough to vote";
// }else{
//  echo "Sorry you are {$age}, you are too young to vote";
// }

/* ---------- If & If-Else Statements --------- */
$t = date("H");
// if($t < 12) {
//  echo 'Good Morning';
// }else if($t < 17){
//   echo 'Good Afternoon';
// }else{
//  echo 'Good Evening';
// }
$posts = ['First Post'];

// if(!empty($post)){
//  echo $post[0];
// }else{
//  echo 'No posts';
// }
/* -------- Ternary Operator -------- */

//$firstPost =  !empty($posts) ? $posts[0] : 'No posts';
//$firstPost =  !empty($posts) ? $posts[0] : null;
// $firstPost = $posts[0] ?? null;

// echo $firstPost;


/* -------- Switch Statements ------- */
$favColor = 'red';

// switch($favColor){
//  case 'red':
//   echo "Your favorite color is {$favColor}";
//   break;
//  case 'blue':
//   echo "Your favorite color is {$favColor}";
//   break;
//  default:
//   echo 'Your favorite color is not available';
// }