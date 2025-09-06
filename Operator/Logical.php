<?php

//Logical Operators

$a = true;
$b = false;

echo "true && false : \t";
var_dump(true && false);   // false
echo "<br><br>";
echo "true || false : ";
var_dump(true || false);   // true
echo "<br><br>";
echo "!true : ";
var_dump(!true);        // false
echo "<br><br>";
echo "true and false : ";
var_dump(true and false);  // false
echo "<br><br>";
echo "true or false : ";
var_dump(true or false);   // true
echo "<br><br>";
echo "true xor false : ";
var_dump(true xor false);  // true
echo "<br><br>";
echo "true xor true : ";
var_dump(true xor true);  // false (both same)
echo "<br><br>";
echo "(5 > 3) && (2 < 4) : ";
var_dump((5 > 3) && (2 < 4));  // true
echo "<br><br>";
echo "(5 > 10) || (10 > 2) : ";
var_dump((5 > 10) || (10 > 2)); // true
echo "<br><br>";
echo "!(5 == 5) : ";
var_dump(!(5 == 5));  // false
echo "<br><br>";

?>
