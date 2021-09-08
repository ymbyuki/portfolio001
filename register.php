<?php
    $title = $_POST['title'];

    require_once('logic/dbc.php');
    
    session_start();
    $token = isset($_POST["token"]) ? $_POST["token"] : "";
    $session_token = isset($_SESSION["token"]) ? $_SESSION["token"] : "";
    unset($_SESSION["token"]);

    if(empty($_POST['title'])){
        $message = "入力してください";
    }elseif($token != "" && $token == $session_token) {
        try{
            $sql ='INSERT INTO title(title) VALUE(:title)';
            $stmt = dbc()->prepare($sql);
            $stmt->bindValue(':title', $title, PDO::PARAM_STR);
            $stmt->execute();

            $sql = 'SELECT * FROM title WHERE title = :title';
            $stmt = dbc()->prepare($sql);
            $stmt -> bindValue(":title",$title);
            $stmt -> execute();
            $res = $stmt->fetch(PDO::FETCH_ASSOC);

            $stmt = null;
            $dbh = null;
            $message = "書き込みました";
            }catch(PDOException $e){
                $message = "書き込みに失敗しました。" . $e -> getMessage();
            }
    }else {
        $message = "書き込みに失敗しました。";
    }



    require_once('view/register_tpl.php');