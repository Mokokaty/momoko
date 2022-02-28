<?php

for ($count =1; $count <=10; $count++){
    echo $count . ':';
    if($count % 2 === 0){
        echo "2の倍数 ";
        //echo "<br>";
    }
    if($count % 3 === 0){
        echo "3の倍数 ";
        //echo "<br>";
    }
    if($count % 5 === 0){
        echo "5の倍数";
        //echo "<br>";
    }
    //echo $count;
    echo '<br>';
}
?>