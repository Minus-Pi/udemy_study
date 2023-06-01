<?php

function checkPostalCode($str) {
    $replaced = str_replace('-', '', $str); // 1234567に置換
    $length = strlen($replaced); // 文字の長さを確認

    if ($length === 7) { // 文字の長さが7なら true を返す
        return true;
    } else {
        return false;
    }
}

$postalCode = '123-4567';
var_dump(checkPostalCode($postalCode));