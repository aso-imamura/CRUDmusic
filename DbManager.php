<?php
function getDb() {
        // データベースへの接続を確認
        $dsn='mysql:host=mysql152.phy.lolipop.lan;dbname=LAA1273448-school;charset=utf8';
        $username='LAA1273448';
        $password='XXXX';
        $pdo=new PDO($dsn,$username,$password);
        //ソース可読性を重視しtry~catchは省略します
        //$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $pdo;
}
?>
