<?php
require_once("logic/dbc.php");

if(isset($_GET['id'])){
$id = $_GET['id'];
}


$sql = 'SELECT * FROM title WHERE id = :id';
$stmt = dbc()->prepare($sql);
$stmt -> bindValue(":id",$id);
$stmt -> execute();
$res = $stmt->fetch(PDO::FETCH_ASSOC);


$sql = 'SELECT * FROM content WHERE title_id = :title_id ORDER BY up_date DESC';
$stmt = dbc()->prepare($sql);
$stmt -> bindValue(":title_id",$id);
$stmt -> execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = null;
$dbh = null;

require_once('view/overview_tpl.php');