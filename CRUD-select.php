<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>music-select(CURD)</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<h2>楽曲一覧</h2>
<a href="CRUD-menu.php">メニューに戻る</a>
<hr>

<?php
//DB接続
require_once 'DbManager.php';
$pdo = getDb();

//楽曲一覧表示
//ラジオボタンの値valueは曲番号song_id
foreach ($pdo->query('select * from music') as $row) {
    echo '<p>';
   // echo '<input type="radio" name="songid" value=',$row['song_id'],'>';
    echo $row['song_id'], ' : ';
    echo $row['song_name'], ' : ';
    echo $row['singer'];
    echo '</p>';
}
//DBクローズ
$pdo = null;
?>
</body>
</html>

