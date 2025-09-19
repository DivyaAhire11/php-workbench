<?php
// Some Key Points About Array

$x = array(6 => "radha", 10 => 2);

$x[] = 56;  // This is add at the end of array $x[11] = 56;
$x["x"] = 42; // This adds a new element  [x] => 42
  
print_r($x);

unset($x[10]); // removes the element from the array

print_r($x);

unset($x);    // This deletes the whole array

// var_dump($x); //  Undefined variable $x


echo "<br><br>";
echo "<br><br>";



$games = ["kho-kho","Kabaddi","sudoku","Candy Crush"];
//destructuring

[$game1 ,$game2,$game3, $game4] = $games;

echo $game1."<br>";
echo $game2."<br>";
echo $game3."<br>";
echo $game4."<br>";

echo "<br><br>";

$name = "sayali";
$surname = "Ahire";

echo "Name is :$name<br>";
echo "SurName is :$surname<br>";
//Swapping
[$surname , $name] = [$name , $surname];

echo "Name is :$name<br>";
echo "SurName is :$surname";


$a = [11 , 22 , 33];
$b = [...$a];
$c = ["hii" , ...$a , "hello"];
$p = [...$b , ...$c, 100];
$q = [121 , ...$c];

print_r($a);
echo "<br>";

print_r($b);
echo "<br>";

print_r($c);
echo "<br>";

print_r($p);
echo "<br>";

print_r($q);
echo "<br>";




?>