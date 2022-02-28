<?php
$month_day = date( 't' );
$date = date('w', strtotime(date('Ym01')));
// 1日はじまり
$count = 1;
// 1日から今月の日数分繰り返し
$array = [
    1 => '土',
    2 => '日',
    3 => '月',
    4 => '火',
    5 => '水',
    6 => '木',
    7 => '金',
    8 => '土',
    9 => '日',
    10 => '月',
    11 => '火',
    12 => '水',
    13 => '木',
    14 => '金',
    15 => '土',
    16 => '日',
    17 => '月',
    18 => '火',
    19 => '水',
    20 => '木',
    21 => '金',
    22 => '土',
    23 => '日',
    24 => '月',
    25 => '火',
    26 => '水',
    27 => '木',
    28 => '金',
    29 => '土',
    30 => '日',
    31 => '月',
];
while ($count <= $month_day) {
// 曜日
$week = $date % 7;


  

// --- 曜日の数値から曜日の文字列を取得し、配列に格納する処理をここに書く ---

// カウンタ加算
$count ++;
// 曜日加算
$date ++;
}
// foreach($array as $key => $val){
//     echo $key.':';     
//     echo $val.'<br>'; 
// } 
$month_day = date( 't' );
// echo $month_day;
// echo '<br>';
$date = date('w', strtotime(date('Ym01'))); 
// echo $date;
// echo '<br>';
// $array = [
//     1 => '土',
//     2 => '日',
//     3 => '月',
//     4 => '火',
//     5 => '水',
// ];
// 1日はじまり
$count = 1;
$array =[];
// 1日から今月の日数分繰り返し
while ($count <= $month_day) {
// 曜日
$week = $date % 7;

// --- 曜日の数値から曜日の文字列を取得し、配列に格納する処理をここに書く ---
switch($week){
    case 0: 
          $data = "日";
        break;
    case 1: 
         $data =  "月";
        break;
    case 2: 
          $data = "火";
        break;
    case 3: 
            $data = "水";
          break;
    case 4: 
           $data =  "木";
          break;
    case 5: 
            $data = "金";
          break;
    case 6: 
            $data = "土";
          break;     
 }

    

 $array = $array + array($count => $data);
// カウンタ加算
$count ++;
// 曜日加算
$date ++;
}
foreach($array as $key => $val){
    echo $key.'日';     
    echo $val.'曜日<br>'; 
} 
?>
