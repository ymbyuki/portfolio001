<?php
    $title = $_POST['title'];
    print_r($title);

    require_once('logic/dbc.php');

    $sql ='INSERT INTO title(title) VALUE(:title)';
    $stmt = dbc()->prepare($sql);
    $stmt->bindValue(':title', $title, PDO::PARAM_STR);
    $stmt->execute();