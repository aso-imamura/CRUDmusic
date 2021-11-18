<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>楽曲削除(CRUD)</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<h2>削除しました</h2>
<a href="CRUD-menu.php">メニューに戻る</a>
<hr>
<?php
//曲IDArray取得

if(!empty($_POST['songarray'])){

    //DB接続
    require_once 'DbManager.php';
    $pdo = getDb();

    //更新処理DELETE FROM tab1 WHERE col1 in ('001','002','003');
    /*$sql=$pdo->prepare('DELETE FROM music WHERE song_id=?');
    $sql->bindValue(1,$songarray,PDO::PARAM_INT);
    $sql->execute();
*/
    // 削除対象データを取得する
    $no = $_POST['songarray'];
    // SQLを組み立てる
    $insql='DELETE FROM music WHERE (song_id IN (';
    for ($i = 0; $i < count($no); $i++) {
        $insql .= $no[$i];
        if ($i < count($no) - 1) {
            $insql .= ", ";
        }
        else {
            $insql .= "))";
        }
    }
    $sql=$pdo->query($insql);

    $pdo = null;
}else{
    require_once 'ng.php';
}
?>

</body>
</html>
