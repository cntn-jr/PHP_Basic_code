<!-- SQLへの接続 -->
<?php
try {
    $dsn = 'データベース名';
    $usr = 'ユーザ名';
    $passwd = 'パスワード';

    $db = new PDO($dsn, $usr, $passwd);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //ここからSQL
    //SELECTの場合
    $stt = $db->query('SELECT fullName, age, weight FROM manProfile;');
    while ($row = $stt->fetch()) {
        echo '名前：'.$row[0];
        echo 'または、名前：'.$row['fullName'];
    }

    //UPDATEやINSERTの場合
    $stt = $db->prepare('UPDATE manProfile SET age = 20 WHERE fullName = :aName;');
    $stt->bindValue(':aName', 'ベジータ中学生');
    $stt->execute();
} catch (PDOException $e) {
    //output error...
    //エラー処理
    print($e);
} finally {
    $db = null;
}
