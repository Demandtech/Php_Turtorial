<?php
/* --------- Array Functions -------- */
$fruits = ['Apple', 'Orange', 'Peer'];
/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

//get length
//echo count($fruits);

//search array
//var_dump(in_array('Apple', $fruits));

//add to array
$fruits[] = 'grape';
array_push($fruits, 'blueberry', 'strawberry');
array_unshift($fruits, 'mango');


//remove from array
array_pop($fruits);
array_shift($fruits);
//unset($fruits[2]);

//split into chunks
// $chunked_array = array_chunk($fruits, 2);

// print_r($chunked_array);

$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr1, $arr2);
//$arr4 = [...$arr1];
//print_r($arr4);

$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];

$c = array_combine($a, $b);

print_r($c);

$key = array_keys($c);
//print_r($key);

$flipped = array_flip($c);
//print_r($flipped);

$numbers = range(1,20);

//print_r($numbers);

$newNumbers = array_map(function($number){
  return "Number {$number}";
}, $numbers);

//print_r($newNumbers);
$lessThan10 = array_filter($numbers, function($number){
  return $number <= 10;
});

print_r($lessThan10);

$sum = array_reduce($numbers, function($carry, $number){
  return $carry + $number;
});
 var_dump($sum);
