<?php
echo 'ERR!<br>';
echo '選択されていません<br>';

//スーパーグローバル変数を利用
echo '<a href="',$_SERVER['HTTP_REFERER'],'"><button type="button">前へ戻る</button></a>';