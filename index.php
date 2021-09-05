<?php
//dnc読み込み
require_once("logic/dbc.php");

$sql = 'SELECT * FROM title';
$stmt = dbc()->prepare($sql);
$stmt -> execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = null;
$dbh = null;

require_once ("view/index_tpl.php");