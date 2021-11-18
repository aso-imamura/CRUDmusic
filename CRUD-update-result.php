<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>楽曲更新(CRUD)</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<h2>楽曲更新</h2>
<a href="CRUD-menu.php">メニューに戻る</a>
<hr>
<?php


    if(!empty($_POST['songid'])){
        $songid=$_POST['songid'];

        //DB接続
        require_once 'DbManager.php';
        $pdo = getDb();

        //XSS
        require_once 'common.php';

        //表示情報取得
        $sql=$pdo->prepare('select * from music where song_id=?');
        $sql->execute([$songid]);
        foreach ($sql as $row){
            $songname=$row['song_name'];
            $singer=$row['singer'];
        }
    }else{
        require_once 'ng.php';
    }

//フォーム作成
echo '<form action="CRUDbak-updateFix.php" method="post">';
//HTML部品表示
echo '<input type="hidden" name="songno" value="',h($songid),'">'; //hiddonで送る
echo '曲名：';
echo '<input type="text" name="songname" value="',h($songname),'">';
echo '<br>';
echo '歌手名：';
echo '<input type="text" name="singer" value="',h($singer),'">';
echo '<br>';
echo '<button type="submit" name="update">更新</button>';
echo '</form>';

$pdo = null;
?>

</body>
</html>