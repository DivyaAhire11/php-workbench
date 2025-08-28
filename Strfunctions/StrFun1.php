<?php
   //length and count function
   $name = "Hello World"; // 11
   $len= strlen($name);

   echo "Lenght of $name is : $len"; //Lenght of Hello World is : 11

   echo "\n";
   $msg = "PHP is a Backend language";
   $cnt = str_word_count($msg);
   echo "Word count is : $cnt"; //Word count is : 5

   echo "\n";
   echo substr_count("banana","na");
?>