<?php
//現在日時の取得
$now = new DateTime();
echo $now;

//テキストを変えて表示
$date = $now->format('Y/m/d H:i:s');