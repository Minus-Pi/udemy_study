<?php

$test = '123';

if (!empty($test)) { // 条件式にelseを使うと可読性が下がるのでなるべく使わない
    echo '変数は空ではありません';
}

// 三項演算子
// 条件 ? 真 : 偽

$math = 90;
// 80以上ならgood、そうでないならno good
$comment = $math > 80 ? 'good': 'no good';
echo $comment;