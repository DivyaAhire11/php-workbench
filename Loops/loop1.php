<?php
//while loop

$i = 1;
while ($i <= 5) {
    echo "Number: $i \n";
    $i++;
}

echo "\n\n";

$i = 2;
while ($i <= 20) {
    echo $i . " ";
    $i += 2;
}

echo "\n\n";

$num = 5;
$fact = 1;
$i = 1;

while ($i <= $num) {
    $fact *= $i;
    $i++;
}

echo "Factorial of $num = $fact";

echo "\n\n";


?>