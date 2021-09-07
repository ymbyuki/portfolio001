<?php
require_once("logic/dbc.php");
ini_set('display_errors', 1);

if(isset($_GET['id'])){
$content_id = $_GET['id'];
}

$sql = 'SELECT * 
        FROM title 
        INNER JOIN content ON content.title_id = title.id
        WHERE content.id = :id';
$stmt = dbc()->prepare($sql);
$stmt -> bindValue(":id",$content_id);
$stmt -> execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

require_once('view/info_tpl.php');