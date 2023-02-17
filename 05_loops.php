<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */
/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

// for($s = 0; $s <= 10; $s++){
//  echo 'Number ' . $s . '<br>';
// }


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/
// $s = 1;
// while($s <= 15){
//  echo 'Number ' . $s . '<br>';
//  $s++;
// }

/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/
// $s = 1;
// do{
//  echo 'Number ' . $s . '<br>';
//  $s++;
// } while($s <= 10);


/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/
$posts = ['First Post', 'Second Post', 'Third Post'];

// for($i=0; $i< count($posts); $i++){
//  echo $posts[$i] .' <br>';
// }
// foreach($posts as $post){
//  echo $post . '<br>';
// }

// foreach($posts as $index => $post){
//  echo $index + 1 . '-' . $post . '<br>';
// }

// $person = [
//  'first_name' => 'Brad',
//  'last_name' => 'Traversy',
//  'email'=> 'brad@gmail.com',
// ];

// foreach($person as $key => $value) {
//  echo $key . ' - ' . $value . '<br>';
// }