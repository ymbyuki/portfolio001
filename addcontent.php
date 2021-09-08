<?php
//タイトルの取得
require_once('logic/user_logic.php');
$result = getTitle();

if(isset($_GET['id'])){
    $select_title = getOnlyTitle($_GET['id']);
    $select_title_id =$_GET['id'];
}
require_once('view/addcontent_tpl.php');
?>
