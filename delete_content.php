<?php 
require_once('logic/user_logic.php');
delete_content($_POST["title_id"]);

$message = 'データを削除しました。';
require_once('view/dellete_result_tpl.php');