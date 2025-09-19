<?php
//Type Casting and Overwriting example

$array = array(
    1    => "a", // (1 ==>1 , "1" ==> 1 ,1.5 ==> 1, true==>1) all means 1 so overwritten at last contain 1 as d o/p is d
    "1"  => "b", //(string "1" becomes integer key 1)
    1.5  => "c", //(1.5 → 1)
    true => "d", //(true → 1)
);
var_dump($array);
print_r($array);


echo "<br><br>";


$array = array(
    1    => 'a',  //1->a ->b ->c ->f->g (OVERWRITE)
    '1'  => 'b',   // the value "a" will be overwritten by "b"
    1.5  => 'c',   // the value "b" will be overwritten by "c"
    -1 => 'd',
    '01'  => 'e',  // as this is not an integer string it will NOT override the key for 1
    '1.5' => 'f',  // as this is not an integer string it will NOT override the key for 1
    true => 'g',  // the value "c" will be overwritten by "g"
    false => 'h',  // (false → 0)
    '' => 'i',  //NULL key → becomes empty string ""
    null => 'j',  // the value "i" will be overwritten by "j"
    'k',      // value "k" is assigned the key 2. This is because the largest integer key before that was 1
    2 => 'l', // the value "k" will be overwritten by "l"
);

print_r($array);
//Array ( [1] => g [-1] => d [01] => e [1.5] => f [0] => h [] => j [2] => l )

$array = array(
         "a", //[0]
         "b", //[1]
    6 => "c", //[6]
         "d", //[7]
);
var_dump($array);

$demo = [];
$demo[-5] = 10;// [-5] => 10 
$demo[] = 6; //[0] => 6
print_r($demo);



$Fruit = array(
    "shape" => "Round",
    "Names" => array(
                "Mango",
                "Orange",
                "Grapes",
                "Test"=> array(
                            "sweet",
                             "sour"
                              )
                   ),
                "price"=>500
             );

print_r($Fruit["shape"]); //Round
echo "<br><br>";

print_r($Fruit["Names"]); 
echo "<br><br>";

print_r($Fruit["price"]); //500
echo "<br><br>";

print_r($Fruit["Names"]["Test"][1]); //sour
echo "<br><br>";

print_r($Fruit["Names"][2]);//Grapes
echo "<br><br>";

print_r($Fruit["Names"]["Test"][0]); //sweet
echo "<br><br>";




function getValue() {
    return array("DIvya", "Vilas", "Ahire");
}

// $secEle = getArray()[1];
// echo $secEle;

echo getValue()[0]."<br>";
echo getValue()[1]."<br>";
echo getValue()[2]."<br>";



?>

