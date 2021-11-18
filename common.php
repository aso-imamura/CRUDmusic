<?php
/// h関数が未定義の場合は定義
if( ! function_exists('h') ) {
    function h($s) {
        echo htmlspecialchars($s, ENT_QUOTES, "UTF-8");
    }
}
//https://qiita.com/mpyw/items/19e6fed835ccdbcb0d6d
?>



