<?php

// 文字列の長さ strlen, mb_strlen

// マルチバイト
// 日本語 SJIS, UTF-8 3~6バイト
$text = 'あいうえお';

echo strlen($text) . '<br>'; // 日本語のようなマルチバイト文字は非対応

echo mb_strlen($text) . '<br>';

// 文字列の置換 str_replace

$str = '文字列を置換します';

echo str_replace('置換', 'ちかん', $str) . '<br>'; // 置換->ちかん に置き換え

// 指定文字列で分割

$str_2 = '指定文字列で、分割します';

echo '<pre>';
var_dump(explode('、', $str_2));
echo '</pre';

echo '<br>';

// implode
// 正規表現

$str_3 = '特定の文字列が含まれるか確認する';

echo preg_match('/文字列/', $str_3) . '<br>';

echo substr('abcde', 2) . '<br>';
echo mb_substr('あいうえお', 2) . '<br>';

// 配列に配列を追加する
$array = ['りんご', 'みかん'];

array_push($array, 'ぶどう', 'なし');

echo '<pre>';
var_dump($array);
echo '<pre>';