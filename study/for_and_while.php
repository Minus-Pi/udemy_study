<?php

// for文 繰り返す数が決まっているなら
// continue, break
for($i = 0; $i < 10; $i++) {
    if ($i === 5) {
        //break; 5になったら終了
        continue; // 5はスキップ
    }
    echo $i;
}

echo "<br>";

// while文 繰り返す数が決まっていなかったら
$j = 0;
while($j < 5) {
    echo $j;
    $j++;
}

do{echo $j;}
while($j < 5);