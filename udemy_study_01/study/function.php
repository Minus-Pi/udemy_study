<?php

// 関数 == function == 機能
// 入力(お金を入れて何らかのボタンを押す) 引数
// -> 自動販売機 
// -> 出力(飲み物とお釣りが出てくる)戻り値

// 組み込み関数・・・準備してある関数
// ユーザー定義関数・・・自由に作れる関数

// function test(引数1, 引数2) {
//  処理
//  return 戻り値;
// }


function test() {
    echo 'テスト';
}

test();
echo '<br>';

// 引数あり
// 戻り値なし
$comment = 'コメント2';

function getComment($string) { //引数と
    echo $string; // 処理内の変数は同じでないといけない
    // echo $comment; 外で定義した変数は使えない
}

getComment($comment);
echo '<br>';

// 引数なし
// 戻り値あり

function getNumberOfComment() {
    return 5;
}

$comment = getNumberOfComment();

// echo getNumberOfComment();
echo $comment;
echo '<br>';

// 引数2つ
// 戻り値あり

function sumPrice($int1, $int2) {
    $int3 = $int1 + $int2;
    return $int3;
}

$total = sumPrice(3,5);

echo $total;