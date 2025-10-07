<?php
  $size = 8;
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ChessBoard</title>
<style>
   table{
      border-collapse : collapse;
   }
   .white{
       background-color : white;
   }
   .black{
      background-color : black;
   }
</style>
</head>
<body>
     <h3>ChessBoard (<?php echo $size; ?>)X(<?php echo $size; ?>)</h3>
     <table Border='2'>     
        <?php
           for($r =0 ;$r<$size ;$r++){
            echo "<tr>";
            for($c = 0;$c< $size;$c++){
                if(($r + $c)%2 == 0){
                    echo "<td class = 'white' height='50px' width='50px'> </td> ";
                }else{
                    echo "<td class = 'black' height='50px' width='50px'> </td> ";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>

