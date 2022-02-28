<?php
$skip = 1;15;33;
$count = 0;
 
while($count < 100){
   if($count == $skip){
       $count++;
       continue;
   }
   echo "{$count}.\n"; //"\n"は改行の意味
   $count++;
   if($count == $loop_max){
    break;
}
echo "\n";
echo "処理終了";
}
?>