<?php

//Increment / Decrement


$x = 5;

echo "$x pre-increment : ".++$x;  // 6 (pre-increment)
echo "<br>";

echo "$x post-increment : ".$x++;  // 6 (then x=7)
echo "<br>";

echo "$x pre-decrement : ".--$x;  // 6
echo "<br>";

echo "$x post-decrement : ".$x--;  // 6 (then x=5)
echo "<br> <br>";

// Extra
$y = 10;
echo "$y post-increment :";
echo $y++; // prints 10, y=11
echo "<br>";

echo "$y pre-increment : ";
echo ++$y; // prints 12
echo "<br>";

echo "$y pre-decrement : ";
echo --$y; // prints 11
echo "<br>";

echo "$y post-decrement : ";
echo $y--; // prints 11, y=10
echo "<br>";

?>
