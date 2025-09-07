<?php

//For Loops 


for($i = 1 ; $i<= 10 ; $i++){
    echo "$i. HELLO Divya <br>";
}
echo "<br><br>";

$num = 4;
for($i = 1; $i <= 10 ;$i++){
    echo $num * $i."<br>";
}
echo "<br><br>";

for($j = 2; $j <= 100; $j++){
    $isPrime = true; // assume prime

    for($i = 2; $i <= sqrt($j); $i++){
        if($j % $i == 0){
            $isPrime = false;
            break;
        }
    }

    if($isPrime){
        echo "$j is a PRIME NUMBER<br>";
    }
}
echo "<br><br>";

$num = 5;
$original = $num;
$fact = 1;

if ($num == 0) {
    $fact = 1; // 0! is 1
} else {
    for ($i = $num; $i > 1; $i--) {
        $fact *= $i;
    }
}

echo "Factorial of $original is : $fact";


?>