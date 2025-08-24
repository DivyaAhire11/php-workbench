<?php
//variables in php

     $name = "divya";
     $age = 20;
     $msg = "Good Day";

     echo "Name is : $name \n Age is : $age \n Massage is : $msg";

     $name = "riya\n";
     $Name = "priya\n";
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

echo  $$food,"\n"; //Mango


$a = "b";
$b = "c";
$c = "PHP";

echo "$b\n"; //c
echo $$a,"\n"; //c
echo $a,"\n"; //b
echo $$$a,"\n"; //PHP


$NAME = "student";
$$NAME = "divya";

ecHo $student; //divya and ecHo is valid

echo $NAME; //student
echo $$NAME; //divya
   
//with array 
$name = "colors";
$colors = ["red","green","blue"];
foreach($$name as $color){
    echo $color . "\n";
}
?>