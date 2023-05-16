<?php
// switch
// if文の方が見やすい
// switch文は型が厳密でない

$data = '1';

switch($data) {
    case $data === 1: // 判定を厳密にするにはこの書き方
        echo '1です';
        break;
    case 2;
        echo '1です';
        break;
    case 3;
        echo '1です';
        break;
    default:
        echo '1-3ではありません';
        break;
}