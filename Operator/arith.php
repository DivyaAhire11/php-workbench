<?php

//Arithmetic Operators


$a = 15;
$b = 4;

echo "$a + $b = ".$a + $b . " <br>";   // 19
echo "$a - $b = ".$a - $b . " <br>";   // 11
echo "$a * $b = ".$a * $b . " <br>";   // 60
echo "$a / $b = ".$a / $b . " <br>";   // 3.75
echo "$a % $b = ".$a % $b . " <br>";   // 3 (remainder)
echo "$a ** $b = ".$a ** $b . " <br>";  // 50625 (power)

// Extra examples
echo (10 + 20 - 5)  . "<br>";      // 25
echo (5 + 3) * 2  . "<br>";      // 16
echo (20 / 5 + 3)  . "<br>";       // 7
echo ((15 % 4) + 10)  . "<br>";    // 13
echo (2 ** 3 ** 2)  . "<br>";      // 512 (power is right-associative)
?>
