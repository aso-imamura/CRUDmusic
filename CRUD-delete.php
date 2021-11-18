<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>楽曲削除(CRUD)</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<h2>楽曲削除</h2>
<a href="CRUD-menu.php">メニューに戻る</a>
<hr>
<?php
//DB接続
require_once 'DbManager.php';
$pdo = getDb();

//楽曲一覧表示
//フォーム作成
//チェックボックスの値valueは曲番号song_id
echo '<form action="CRUDbak-delete-result.php" method="post">';
echo '<button type="submit" name="delete-result">削除</button>';
foreach ($pdo->query('select * from music') as $row) {
    echo '<p>';
    echo '<input type="checkbox" name="songarray[]" value=',$row['song_id'],'>';
    echo $row['song_id'], ' : ';
    echo $row['song_name'], ' : ';
    echo $row['singer'];
    echo '</p>';
}

echo '</form>'; //formタグの閉じ
//DBクローズ
$pdo = null;
?>
</body>
</html>

