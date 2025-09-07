<?php
//if else ladder

$marks = 75;
if($marks >= 90){
    $grade = "A";
}elseif($marks >= 75 && $marks <= 89){
    $grade = "B";
}elseif($marks >= 50 && $marks <= 74){
    $grade = "C";
}elseif($marks >= 40 && $marks <= 49){
    $grade = "D";
}else{
    $grade = "Fail";
}

echo "Grade is : $grade";


echo "<br><br>";


//Positive,Negative,zero
$n = 47;
if($n > 0){
    echo "$n is POSITIVE";
}elseif($n == 0){
    echo "$n is Zero";
}else{
    echo "$n is Negative";
}

echo "<br><br>";



$salary = 80000;
if($salary > 100000){
    echo "You Got 30% tax";
}elseif($salary >= 50000 && $salary <= 100000){
        echo "You Got 30% tax";
}elseif($salary >= 25000 && $salary <= 50000){
        echo "You Got 10% tax";
}elseif($salary < 25000){
    echo "No Tax";
}

echo "<br><br>";

$age = 20;
if($age >=0 && $age <= 12){
    $category = "Child";
}elseif($age >=13 && $age <= 19){
    $category = "Teenager";
}elseif($age >=20 && $age <= 35){
    $category = "Young Adult";
}elseif($age >=36 && $age <= 60){
    $category = "Adult";
}else{
    $category = "Senior Citizen";
}
echo " YOUR Chategory Is : $category";


?>