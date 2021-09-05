<?php
require_once("logic/dbc.php");

if(isset($_GET['id'])){
$content_id = $_GET['id'];
}

$sql = 'SELECT * 
        FROM content
        WHERE id = :id';
$stmt = dbc()->prepare($sql);
$stmt -> bindValue(":id",$content_id);
$stmt -> execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

require_once('view/info_tpl.php');