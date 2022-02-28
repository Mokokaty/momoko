<?php
 
//「こんにちは」という文字列が返ってくる関数
 
// function sayhello(){   
//     return 'こんにちは';  //関数で処理を行った際に、最終的な値を返すための記述
// }
 
//最終的に欲しい値をreturnをつけて関数の外に出してあげるイメージ
 
//実行
// echo sayhello();
?>

<?php

// function myTodayString($date){
//     return $date;
// }
// echo  date('m月d日');
?>

<?php

function myTodayString($date){
    $week = array( "日", "月", "火", "水", "木", "金", "土" );
        
    if ($date){
        echo date('m月d日').$week[date("w")];
    
} else {
    echo date('m月d日');
}

    // return $date;
}
myTodayString(True);

?>