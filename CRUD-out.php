<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>music-select-out</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>


<?php
$pdo=new PDO('mysql:host=mysql152.phy.lolipop.lan;
            dbname=LAA1273448-school;charset=utf8',
            'LAA1273448',
            'asouasou');



if(isset($_POST['add'])) {
    echo '登録ボタンが押下されました';
}else if(isset($_POST['update'])) {
    echo '更新ボタンが押下されました';
} else {
    echo '削除ボタンが押下されました';
}






$pdo = null;

?>
</body>
</html>


<!--
$sql=$pdo->prepare('INSERT INTO music(song_name,singer) VALUES(?,?)');
$sql->execute([$_POST['song'],$_POST['singer']]);
$pdo = null;
echo '登録してDB切断しました。'


$sql=$pdo->prepare('INSERT INTO music(song_name,singer) VALUES(?,?)');
$sql->bindValue(1,$_POST['song'],PDO::PARAM_STR);
$sql->bindValue(2,$_POST['singer'],PDO::PARAM_STR);
$sql->execute();


$sql=$pdo->prepare('UPDATE music SET singer=? WHERE song_id=?');
$sql->bindValue(1,$_POST['singer'],PDO::PARAM_STR);
$sql->bindValue(2,5,PDO::PARAM_STR);
$sql->execute();

$sql=$pdo->prepare('UPDATE music SET singer=? WHERE song_id=?');
$sql->execute([$_POST['singer'],5]);



$sql=$pdo->prepare('DELETE FROM music WHERE song_id=?');
$sql->execute([6]);
$pdo = null;


$sql=$pdo->prepare('DELETE FROM music WHERE song_id=?');
$sql->bindValue(1,7,PDO::PARAM_STR);
$sql->execute();
-->