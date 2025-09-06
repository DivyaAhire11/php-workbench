<?php
//while loop

$i = 1;
while ($i <= 5) {
    echo "Number: $i <br>";
    $i++;
}



$i = 2;
while ($i <= 20) {
    echo $i . " ";
    $i += 2;
}


$num = 5;
$fact = 1;
$i = 1;

while ($i <= $num) {
    $fact *= $i;
    $i++;
}

echo "Factorial of $num = $fact";




?>