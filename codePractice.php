<?php
function demo() {
    static $count = 0;  // declared once
    $count++;
    echo $count . "<br>";
}

demo();
demo();
demo();

echo "\n\n";

function test() {
    static $x = 5 + 10; // allowed in PHP 5.6+
    echo $x;
}

$str1 = "Hello World";   // double quotes (variables parsed)
$str2 = 'Hello World';   // single quotes (variables not parsed)
$name = "Divya";
echo "Hello $name";  // Hello Divya
echo 'Hello $name';  // Hello $name

echo "\n\n";

$str = "   Hello PHP World!   ";

// Length
echo strlen($str);   // 19

// Remove spaces
echo trim($str);     // "Hello PHP World!"

// Find substring
echo strpos($str, "PHP");  // 9

// Replace
echo str_replace("PHP","Java",$str);  // Hello Java World!

// Split
$arr = explode(" ", trim($str));
print_r($arr); // Array ( [0] => Hello [1] => PHP [2] => World! )


?>