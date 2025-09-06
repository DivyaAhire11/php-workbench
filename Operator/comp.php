<?php

//Comparison Operators



echo "check 10 == \"10\" is : ";
var_dump(10 == "10");   // true (loose comparison)
echo "<br>";

echo "check 10 === \"10\" is : ";
 var_dump(10 === "10");  // false (strict, type matters)
echo "<br>";

echo "check 10 != 5 is : ";
var_dump(10 != 5);      // true
echo "<br>";

echo "check 10 !== \"10\" is : ";
var_dump(10 !== "10");  // true
echo "<br>";

echo "check 5 < 10 is : ";
var_dump(5 < 10);       // true
echo "<br>";

echo "check 5 > 10 is : ";
var_dump(5 > 10);       // false
echo "<br>";

echo "check 5 <= 5 is : ";
var_dump(5 <= 5);       // true
echo "<br>";

echo "check 10 >= 5 is : ";
var_dump(10 >= 5);      // true
echo "<br>";

echo "check 2 <=> 3 is : ";
var_dump(2 <=> 3);      // -1 (spaceship: left < right)
echo "<br>";

echo "check 3 <=> 3 is : ";
var_dump(3 <=> 3);      // 0
echo "<br>";

echo "check 4 <=> 2 is : ";
var_dump(4 <=> 2);      // 1
echo "<br>";

?>
