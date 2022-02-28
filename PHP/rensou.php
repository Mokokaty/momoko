<?php
  $color_name = [
    'red' => '赤',
    'yellow' => '黄',
    'blue' => '青',
    'green' => '緑',
    'white' => '白',
    'black' => '黒',
  ];
  $color = [
    'red' => '#FF0000',
    'yellow' => '#00FFFF',
    'blue' => '#0000FF',
    'green' => '#00FF00',
    'white' => '#FFFFFF',
    'black' => '#000000',
  ];
 $key = "blue";
 echo  "<div style='color:{$color[$key]}'>{$color_name[$key]}</div>";
?>