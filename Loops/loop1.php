<?php
//while loop

// $i = 1;
// while ($i <= 5) {
//     echo "Number: $i \n";
//     $i++;
// }

// echo "\n\n";

// $i = 2;
// while ($i <= 20) {
//     echo $i . " ";
//     $i += 2;
// }

// echo "\n\n";

// $num = 5;
// $fact = 1;
// $i = 1;

// while ($i <= $num) {
//     $fact *= $i;
//     $i++;
// }

// echo "Factorial of $num = $fact";

// echo "\n\n";


//eg.1234 -> 4321
$N = 12345;

while($N){
    $x = $N % 10;
    echo $x;
    $N = intdiv($N, 10);
   
}

echo "\n\n";

$digit = 987;
$original = $digit;
$count = strlen((string)$digit);
$sum = 0;
while($count != 0){
    $digit = (int)$digit;
    $a = $digit % 10;
    $sum += $a;
    $digit = intdiv($digit, 10);
    $count --;
}
echo "Sum of $original is :$sum";



?>