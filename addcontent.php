<?php
//タイトルの取得
require_once('logic/user_logic.php');
$result = getTitle();

require_once('view/addcontent_tpl.php');
?>
