<?php

//Comparison Operators



var_dump(10 == "10");   // true (loose comparison)
var_dump(10 === "10");  // false (strict, type matters)
var_dump(10 != 5);      // true
var_dump(10 !== "10");  // true
var_dump(5 < 10);       // true
var_dump(5 > 10);       // false
var_dump(5 <= 5);       // true
var_dump(10 >= 5);      // true
var_dump(2 <=> 3);      // -1 (spaceship: left < right)
var_dump(3 <=> 3);      // 0
var_dump(4 <=> 2);      // 1
?>
