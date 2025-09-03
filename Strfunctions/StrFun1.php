<?php
   //length and count function
   //strlen($str) : return lenght of string
   //str_word_count($str) : return word count
   //substr_count($str, substring) : Count the number of substring occurrences

   $name = "Hello World"; // 11
   $len= strlen($name);

   echo "Lenght of $name is : $len"; //Lenght of Hello World is : 11

   echo "<br>";
   $msg = "PHP is a Backend language";
   $cnt = str_word_count($msg);
   echo "Word count is : $cnt"; //Word count is : 5

   echo "<br>";
   echo substr_count("banana","na");//2 =>"na" appers at : "ba[na]na"  "bana[na]" 2 times
    echo "<br>";
   echo substr_count($name,"o");//2 ==>"o" appears at: "Hell[o] W[o]rld" 2times
    echo "<br>";
   echo substr_count("banana","a");//3 ==> "a" appears at : b[a]n[a]n[a] 3times
    echo "<br>";
   echo substr_count($msg,"Backend");//1 ==> appears at 1 time 
    echo "<br>";
?>