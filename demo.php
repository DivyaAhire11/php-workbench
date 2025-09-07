<?php
$a = array("C","php","java","python");
echo var_dump($a);

echo "<br>";
echo $a[1];
echo "<br>";

echo $a[2];
echo "<br>";

echo $a[3];
echo "<br>";

echo $a[0];
echo "<br>";

// echo $a[4]; //undefined
echo "<br>";

$n="divya";
echo isset($n);

$name = NULL;
echo $name; //not print
echo var_dump($name); //NULL



echo "<br><br>";
echo "10 Random Numbers Generate :";
for($i = 1;$i<= 10 ;$i++){
  $p = rand(1,100);
   echo $p." ";
}

echo "\n\n";
for($i = 1;$i <=5 ;$i++){
    if($i == 3) continue;
    if($i == 5) break;
    echo $i." \t";
}

?>