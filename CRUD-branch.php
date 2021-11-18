<?php
/*
 * 各種ボタンから遷移される
 * 一覧、登録、更新、削除の画面へ自動遷移
 */

//一覧メニューからselectボタンが押下されている
if(isset($_POST['select']))
{
    //header関数を使い、加工HTTPヘッダとして送信する
    header('Location:CRUDbak-select.php');
    exit();
}
//一覧メニューからinsertボタンが押下されている
if(isset($_POST['insert']))
{
    //header関数を使い、加工HTTPヘッダとして送信する
    header('Location:CRUDbak-insert.php');
    exit();
}

//一覧メニューからupdateボタンが押下されている
if(isset($_POST['update']))
{
    //header関数を使い、加工HTTPヘッダとして送信する
    header('Location:CRUDbak-update.php');
    exit();
}

//一覧メニューからdeleteボタンが押下されている
if(isset($_POST['delete']))
{
    header('Location:CRUDbak-delete.php');
    exit();
}

?>