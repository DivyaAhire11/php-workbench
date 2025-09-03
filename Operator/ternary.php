<?php

//Ternary & Null Coalescing


$age = 20;
echo ($age >= 18) ? "Adult" : "Minor";  // Adult

$user = "";
echo $user ?: "Guest";  // Guest (if empty)

$name = null;
echo $name ?? "No Name";  // No Name

$name = "Divya";
echo $name ?? "No Name";  // Divya

// Nested ternary
$score = 75;
echo ($score >= 90) ? "A" : (($score >= 75) ? "B" : "C"); // B
?>
