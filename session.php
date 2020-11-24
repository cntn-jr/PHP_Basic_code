<?php
session_start();
if (!isset($_SESSION['name'])) :
    if (!isset($_POST['name'])) :
        echo '<form>';
        echo '名前：<input type="text" name="name">';
        echo '</form>';
    else :
        echo 'セッションに保存完了';
        $_SESSION['name'] =$_POST['name'];
        session_cache_expire(1);
    endif;
else :
    echo '俺はエリート戦士、'.$_SESSION['name'].'だ';
endif;