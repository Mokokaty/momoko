<?php
$count=1; //初期値//
while($count<=10){ 
    $point = rand(1, 100);
    echo $point;
    if($point>=60){ //ifは中括弧で括らなければならない,セミコロンを忘れない//
        echo "やったね！合格！";
        echo "<br>";
    }

    if($point<60){
        echo "残念、不合格。";
        echo "<br>";
    }
    $count++; //初期値に１を足すインクリメント//
}
?>