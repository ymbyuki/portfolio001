<?php
//dnc読み込み
require_once("logic/user_logic.php");

$result = getTitle();

require_once ("view/index_tpl.php");