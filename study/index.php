<?php

// 配列 1行
$array_1 = ['aaa', 2, 3];
echo $array_1[0];

// $array_2 = [ ['赤', '青', '黄'], ['緑', '紫', '黒'] ];
$array_2 = [
  ['赤', '青', '黄'],
  ['緑', '紫', '黒']
];
echo '<pre>';
var_dump($array_2);
echo '</pre>';

$array_member = [
  'name' => '本田',
  'height' => 170,
  'hobby' => 'サッカー'
];

echo $array_member['hobby'];

echo '<pre>';
var_dump($array_member);
echo '</pre>';