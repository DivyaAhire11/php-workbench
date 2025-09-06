<?php

//if-else statements
$age = 50;
if($age > 18){
   echo "your Age is : $age <br> SO YOU CAN VOTE!";
}else{
   echo "your Age is : $age <br> SO YOU CAN NOT VOTE!";
}
echo "<br><br>";


$x = 10;
if($x > 50){
   echo "$x is Greater than 50";
}else{
    echo "$x is Smaller than 50";
}
echo "<br><br>";


//  If it is greater than 30°C, print "Hot Day", else "Cool Day"
$temp = 56;
if($temp > 30){
    echo $temp ." Hot Day!";
}else{
     echo $temp ." Cool Day!";
}

echo "<br><br>";


// If ≥ 40, print "Pass", else "Fail"
$marks = 80;
if($marks > 40){
    echo "Pass";
}else{
    echo "Fail";
}
echo "<br><br>";


// check if it is even or odd.
$num = 45;
if($num % 2){
    echo "$num : Odd";
}else{
    echo "$num :  Even";
}

?>