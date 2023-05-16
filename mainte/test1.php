<?php

// パスワードを記録したファイルの場所
echo __FILE__ . "<br>";
// /Applications/MAMP/htdocs/mainte/test.php

// パスワード（暗号化）
echo (password_hash('password123', PASSWORD_BCRYPT)) . "<br>";

// ファイル丸ごと読み込み
$contactFile = '.contact.dat';

$fileContents = file_get_contents($contactFile);

echo $fileContents;
