<?php
 
//グローバルスコープ
$global_var = 100;
 
function foo(){
//ローカルスコープ
$local_var = 200;
echo " 1 : ";
var_dump( $global_var );
echo "<br>";
echo " 2 : ";
var_dump( $local_var );
echo "<br>";
}
 
foo();
echo " 3 : ";
var_dump( $global_var );
echo "<br>";
echo " 4 : ";
var_dump( $local_var );
?>