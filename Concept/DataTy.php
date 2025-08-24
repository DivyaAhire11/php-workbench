<?php 
/*Scalar Type
   1.Integer
   2.Float
   3.String
   4.Boolean

   Compound Type
   5.Array
   6.Object

   Special Type
   7.NULL
   8.Resource

*/

$age = 25;
$balance = -1000;
$big = 7392739749374389475903275;
$greet = 'hello';

// echo var_dump($age); //int type
// echo var_dump($balance);  //int type
// echo var_dump($big);  //float type
// echo var_dump($greet);  //string type

$city = "Mumbai";
echo "I Live in $city <br>";  
// I Live in Mumbai
echo 'I live in $city <br>'; 
// I live in $city

$a=false;
echo $a; 

$fruit = ["mango","banana","apple"];
echo $fruit[0],"<br>";
echo $fruit[1],"<br>";
echo $fruit[2],"<br>";

$student = ["name"=> "divya","age"=> 20];
echo $student["name"]; //divya


class Car{
    public $name;

    function setName($name) {
        $this->name = $name; 
    }
}

$myCar = new Car();
$myCar->setName("BMW");  
echo $myCar->name;       

$x = NULL;
echo $x;

?>