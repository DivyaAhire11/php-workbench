<?php
//DO-WHILE LOOPS
//FOREACH LOOP


$i = 1;
do {
    echo "Value: $i <br>";
    $i++;
} while ($i <= 5);

echo "<br><br>";

$i = 10;
do{
    echo "Run Once";

}while($i < 5);

echo "<br><br>";

$fruit = ["Apple","Banana","Grapes","PineApple","Orange"];
foreach($fruit as $f){
    echo $f."<br>";
}
echo "<br><br>";


$info = ["Name" => "divya", "Age"=> 20, "Faculty"=> "Computer Science","About"=>"FullStack Developer"];
foreach($info as $student => $s){
    echo "$student : $s <br>";
}


?>