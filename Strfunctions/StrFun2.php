<?php
  //Searching 
  //strpos($str,$find) : find position 1st match
  // strrev($str) : reverse the string
  //strrpos($str,$find)
  //str_replace($search,$replace,$variable)
  
  $x = "Hello PHP";

  echo strpos($x,"P"); //6 :starting from zero(H=0, e=1, l=2, l=3, o=4, space=5, P=6)
  echo "<br>";
  echo strpos("hey lets practice more examples","a");//11
  echo "<br>";

   echo strrpos($x,"P"); //8 :"P" last appears at index 8 (H=0, e=1, l=2, l=3, o=4, space=5, P=6, H=7, P=8)
  echo "<br>";
  echo strrpos("hey lets practice more examples","a");//25
  

  $msg = "Hey! Good Luck";
  // echo "<br>",strrev($msg);//kcuL dooG !yeH
  // echo "<br>",strrev($x);//PHP olleH

  $a = str_replace("!"," divya",$msg); //Hey divya Good Luck
  echo $a;
  echo "<br><br>";
  echo strtoupper($msg);
  echo "<br>";
  echo strtolower($msg);
?>