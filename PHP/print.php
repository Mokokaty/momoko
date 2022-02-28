<?php
$len = 10;
$data = [];//[]はただのくくりという意味で配列という宣言をしているだけ
for( $n = 0; $n<$len; $n++ ){
$data[] = random_int( 0, $len );//random_intとはランダムにする関数のこと。関数は必ず丸括弧で囲む。
//$data[] はこのくくりの中に何かを入れてねという意味だから直接ここには何も入れない。
}
print_r($data);
asort($data); //asortとは昇順の関数
echo '<br>';
print_r($data);
//配列の定義の一個目は"0"から始まる。indexという単位
//$とは変数のこと

?>
