<?php
    session_start();
    $token = isset($_POST["token"]) ? $_POST["token"] : "";
    $session_token = isset($_SESSION["token"]) ? $_SESSION["token"] : "";
    unset($_SESSION["token"]);

    if(empty($_POST['content'])){
        $message = "入力してください";
    }elseif($token != "" && $token == $session_token) {
        try{
            $title_id = $_POST['title_id'];
            $content = $_POST['content'];
            $up_date = date("Y/m/d H:i:s");
        
            require_once('logic/dbc.php');
            $sql ="INSERT INTO content (title_id, up_date, content) VALUES (:title_id, :up_date, :content)";
            $stmt = dbc()->prepare($sql);
            $stmt->bindValue(':title_id', $title_id, PDO::PARAM_INT);
            $stmt->bindValue(':up_date', $up_date, PDO::PARAM_STR);
            $stmt->bindValue(':content', $content, PDO::PARAM_STR);
        
            $stmt->execute();
        
            $stmt = null;
            $dbh = null;
            $message = '書き込みました';
            }catch(PDOException $e){
                $message = "書き込みに失敗しました。" . $e -> getMessage();
            }
    }else {
        $message = "書き込みに失敗しました。";
    }

require_once('view/addresult_tpl.php');
