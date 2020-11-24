<?php
//クッキーあるかどうか
if (!isset($_COOKIE['name'])) :
    if (!isset($_POST['name'])) :
        echo '<form>';
        echo '名前：<input type="text" name="name">';
        echo '</form>';
    else :
        echo 'クッキーに保存完了';
        //クッキーの名前、入れるもの、有効期限
        setcookie('name', $_POST['name'], time() + 60 * 60);
    endif;
else :
    echo '俺はエリート戦士、'.$_COOKIE['name'].'だ';
endif;
