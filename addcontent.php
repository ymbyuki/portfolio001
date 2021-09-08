<?php
//タイトルの取得
require_once('logic/user_logic.php');
$result = getTitle();

if(isset($_GET['title'])){
$send_new_title = $_GET['title'];
}
require_once('view/addcontent_tpl.php');
?>
