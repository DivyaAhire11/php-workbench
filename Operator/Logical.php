<?php

//Logical Operators

$a = true;
$b = false;

var_dump($a && $b);   // false
var_dump($a || $b);   // true
var_dump(!$a);        // false
var_dump($a and $b);  // false
var_dump($a or $b);   // true
var_dump($a xor $b);  // true
var_dump(true xor true);  // false (both same)
var_dump((5 > 3) && (2 < 4));  // true
var_dump((5 > 10) || (10 > 2)); // true
var_dump(!(5 == 5));  // false
?>
