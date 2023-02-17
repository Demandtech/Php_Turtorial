<?php
  //Simple Array
  $number = [1,44,55,22];
  $fruits = array('apple', 'orange', 'peer');

 // var_dump($number);
 //echo $fruits[2];
 //Associate Array
 $colors = [
  1=> 'red',
  4=> 'blue',
  6=> 'green'
 ];

 // var_dump($colors[1]);
 // echo $colors[4];
 $hex = [
  'red' => '#f00',
  'green' =>' #0f0',
  'blue' =>' #00f'
 ];

 //echo $hex['red'];

 $person = [
  'first_name' => 'Rasheed',
  'last_name' => 'Adekunle',
  'email' => 'demandwork@gmail.com'
 ];

// echo $person['first_name'];

$people = [
 [
  'first_name' => 'Rasheed',
  'last_name' => 'Adekunle',
  'email' => 'demandwork@gmail.com'
 ],
 [
  'first_name' => 'Brad',
  'last_name' => 'Travery',
  'email' => 'demandwork@gmail.com'
 ],
 ['first_name' => 'John',
  'last_name' => 'Doe',
  'email' => 'johnDoe@gmail.com'
  ]
 ];

 //echo $people[2]['email'];
 var_dump(json_encode($people));