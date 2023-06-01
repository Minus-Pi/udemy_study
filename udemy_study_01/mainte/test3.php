<?php

$contactFile = '.contact.dat';

// ファイルを開く
$contents = fopen($contactFile, 'a+');

$addText = '一行追記' . "\n";

// ファイルに書き込む
fwrite($contents, $addText);

// ファイルを閉じる
fclose($contents);
