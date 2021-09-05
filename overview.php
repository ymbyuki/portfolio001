<?php
require_once("logic/dbc.php");

if(isset($_GET['title'])){
$title = $_GET['title'];
}

$sql = 'SELECT * FROM title WHERE title = :title';
$stmt = dbc()->prepare($sql);
$stmt -> bindValue(":title",$title);
$stmt -> execute();
$res = $stmt->fetch(PDO::FETCH_ASSOC);


$sql = 'SELECT * FROM content WHERE title_id = :title_id';
$stmt = dbc()->prepare($sql);
$stmt -> bindValue(":title_id",$res['id']);
$stmt -> execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = null;
$dbh = null;

require_once('view/overview_tpl.php');