<?php
date_default_timezone_set('Asia/Tokyo');
// echo date("Y/m/d H:i:s");
// $hour = date("H");
// 現在時刻で表したい時

$hour = intval(date("21"));
// 時間を好きなように指定したいとき
if(6 <= $hour && $hour <= 10)
{echo"おはようございます。";}
if(11 <= $hour && $hour <= 15)
{echo"こんにちは。";}
if(16 <= $hour && $hour <= 20)
{echo"こんばんは";}
if(21 <= $hour && $hour <= 24)
{echo"お疲れ様です。お早めにお休みください。";}
if(01 <= $hour && $hour <= 05)
{echo"Zzz";}


?>