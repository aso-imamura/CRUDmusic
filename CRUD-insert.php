<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>楽曲登録(CRUD)</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<h2>楽曲を追加</h2>
<a href="CRUD-menu.php">メニューに戻る</a>
<hr>
<form action="" method="post">
    曲名：<input type="text" name="newsong">
    <br>
    歌手名：<input type="text" name="newsinger">
    <br>
    <button type="submit" name="action" value="send">登録</button>
    <br>
<!--    <p><a href="CRUD-menu.php"><button type="button">楽曲管理メニュー</button></a></p> -->
</form>
</body>
</html>
<?php
/*
 * 自身へPOSTする
 */
//if(isset($_POST['newsong']) and isset($_POST['newsinger'])) {
//if(is_null($_POST['newsong']) and is_null($_POST['newsinger'])) {
if(!empty($_POST['newsong']) and !empty($_POST['newsinger'])) {
    //DB接続
    require_once 'DbManager.php';
    $pdo = getDb();

    //$sql=$pdo->prepare('INSERT INTO music(song_name,singer) VALUES(?,?)');
    $sql = $pdo->prepare('INSERT INTO music VALUES(null,?,?)');
    $sql->bindValue(1, $_POST['newsong'], PDO::PARAM_STR);
    $sql->bindValue(2, $_POST['newsinger'], PDO::PARAM_STR);
    $sql->execute();
    $pdo = null;
}
?>