<?php
$string = 'hello world';

//echo strlen($string);
//echo strpos($string, 'o');

//echo strrpos($string, 'o');

//echo strrev($string);

//echo strtolower($string);

//echo strtoupper($string);

//echo ucwords($string);
//echo str_replace('world', 'Everyone', $string);
//echo substr($string, 0, 5);
//echo substr($string, 5);

// if(str_starts_with($string, 'hello')){
//   echo 'YES';
// }

// if(str_ends_with($string, 'id')){
//    echo 'YES';
// }

$string2 = '<script>alert(1)</script>';

echo htmlspecialchars($string2);

printf('%s likes to %s', 'brad', 'code');
printf('1+1=%f', 1+ 1);