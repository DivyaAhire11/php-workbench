<?php
//if statements in php
 $age = 20;
 if($age >18){
    echo "Age is : $age <br> you are able to marry";
 }
 if($age < 18 ){
    echo "Age is : $age <br> You are not able to marry! You need To Study";
 }
 echo "<br><br>";


//check is Prime
$n = 4;
$flag = false;
for($i = 2;$i <= $n/2; $i++){
    if($n % $i == 0){
        $flag = true;
        break;
    }
}
if(!$flag)
   echo "$n is PRIME NUMBER";

echo "<br><br>";

//A shop offers a 10% discount if the bill is more than ₹5000. Write a program that
// discount = discount*price / 100
$bill = 5000;
 if($bill >= 5000){
     $offer = ($bill * 10) /100;
     echo "You get 10 % offer! <br>";
     echo "You Have to Pay : ". $bill - $offer;
 }
echo "<br><br>";


// If it is a vowel, print "This is a vowel".
$ch = 'e';
if($ch == "a" || $ch == "e" || $ch == "i" || $ch == "o" || $ch == "u"){
    echo "$ch : This is a vowel";
}
echo "<br><br>";


//Check if a student’s attendance is above 75%. If yes, print "Eligible for Exam".
$attendance = 80;
if($attendance > 75){
    echo "Eligible for Exam";
}

?>