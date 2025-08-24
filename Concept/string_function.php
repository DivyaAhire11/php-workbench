<?php
/*
    1. strlen() : length of string
    2. strrev()  : reverse the string
    3. str_word_count() : count words in given string
    4.  str_repeat(input,multiplier) : give input it multiple 
    5. strpos(string, findword)  : in given string it find that letter or world and print position
    6. str_replace(whatToReplace , replaceNew , where) : 3 parameter pass 1-> which word or letter we want to replace 2->what change 3->where means passed variable or string
    7. <pre></pre> : tag used for stay as it spaces
    8. trim : used for remove spaces from both side
*/
   $greet = "Good day!";
   echo $greet;
   echo "<br>";
   //. operator is used for concatination 
   echo "length of $greet is : ".strlen($greet); //5
   echo "<br>Welcome "."To our Website"; 
   echo "<br>";
   echo strrev($greet); //reverse string

   echo "<br>";
   echo strpos($greet , "!"); //8 (starting from 0 and its position is 8)
   echo "<br>";
   
   echo str_word_count($greet); //2
   echo "<br>";

   echo str_replace("day" , "Morning" , $greet); //Good Morning!
   echo "<br>";

   echo str_repeat($greet,5);
   echo "<br>";
   echo "<pre>";
        echo rtrim("   Have a Nice day     "); //remove right side spaces
        echo "hii";
        echo "<br>";
        
        echo ltrim("   Have a Nice day     ");//remove left side spaces
        echo "hello";
        echo "<br>";

        echo trim("   Have a Nice day     ");//remove both side spaces
        echo "good";
          
        
   echo"</pre>";

?>