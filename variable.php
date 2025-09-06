<?php
//variables in php

     $name = "divya";
     $age = 20;
     $msg = "Good Day";

     echo "Name is : $name <br> Age is : $age <br> Massage is : $msg";

     $name = "riya<br>";
     $Name = "priya<br>";
     echo $name;
     ECHO $Name;  //ECHO is valid

     $_naMe = "radha";
     echo $_naMe;

//Variable Deaclaration : value of one variable is stored as a another variale

    $number = 100;
    $price = 55.48;
    $name = "divya";
    $flag = true;

   echo var_dump($number);  //int(100)
   echo var_dump($price);  //float(55.48)
   echo var_dump($name);   //string(5) "divya"
   echo var_dump($flag);  //bool(true)


//Variable Variables($$)

$food = "fruit";
$fruit = "Mango";

echo  $$food,"<br>"; //Mango


$a = "b";
$b = "c";
$c = "PHP";

echo "$b<br>"; //c
echo $$a,"<br>"; //c
echo $a,"<br>"; //b
echo $$$a,"<br>"; //PHP


$NAME = "student";
$$NAME = "divya";

ecHo $student; //divya and ecHo is valid

echo $NAME; //student
echo $$NAME; //divya
   
//with array 
$name = "colors";
$colors = ["red","green","blue"];
foreach($$name as $color){
    echo $color . "<br>";
}
?>