<?php

$arr = array("Sagar"=>"31","Vicky"=>"41","Leena"=>"39","Ramesh"=>"40");

echo "<h2>Original Array</h2>";
echo "<pre>"; print_r($arr); echo "</pre>";

// (a) Ascending order sort by Value
$ascValue = $arr;           
asort($ascValue);           
echo "<h3>(a) Ascending order by Value</h3>";
echo "<pre>"; print_r($ascValue); echo "</pre>";

// (b) Ascending order sort by Key
$ascKey = $arr;
ksort($ascKey);       
echo "<h3>(b) Ascending order by Key</h3>";
echo "<pre>"; print_r($ascKey); echo "</pre>";

// (c) Descending order sort by Value
$descValue = $arr;
arsort($descValue);    
echo "<h3>(c) Descending order by Value</h3>";
echo "<pre>"; print_r($descValue); echo "</pre>";

// (d) Descending order sort by Key
$descKey = $arr;
krsort($descKey);    
echo "<h3>(d) Descending order by Key</h3>";
echo "<pre>"; print_r($descKey); echo "</pre>";
?>
