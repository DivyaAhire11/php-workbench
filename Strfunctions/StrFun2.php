<?php
  //Searching 
  //strpos($str,$find) : find position 1st match
  // strrev($str) : reverse the string
  //strrpos($str,$find)
  //str_replace($search,$replace,$variable)
  
  $x = "Hello PHP";

  echo strpos($x,"P"); //6 :starting from zero(H=0, e=1, l=2, l=3, o=4, space=5, P=6)
  echo "\n";
  echo strpos("hey lets practice more examples","a");//11
  echo "\n";

   echo strrpos($x,"P"); //8 :"P" last appears at index 8 (H=0, e=1, l=2, l=3, o=4, space=5, P=6, H=7, P=8)
  echo "\n";
  echo strrpos("hey lets practice more examples","a");//25
  

  $msg = "Hey! Good Luck";
  // echo "\n",strrev($msg);//kcuL dooG !yeH
  // echo "\n",strrev($x);//PHP olleH

  $a = str_replace("!"," divya",$msg); //Hey divya Good Luck
  echo $a;
  echo "\n\n";
  echo strtoupper($msg);
  echo "\n";
  echo strtolower($msg);
?>