<?php 
require_once('logic/user_logic.php');
delete_title($_POST["title_id"]);

$message = 'タイトルとそれらのデータを全て削除しました。';
require_once('view/dellete_result_tpl.php');