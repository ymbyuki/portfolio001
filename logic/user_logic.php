<?php
/**
 * タイトルの取得
 * getTitle();
 */
function getTitle(){
    require_once('dbc.php');
    $sql = 'SELECT * FROM title';
    $stmt = dbc()->prepare($sql);
    $stmt -> execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt = null;
    $dbh = null;
    return $result;
}

/**
 * 対応するタイトルを一つ取得
 * 引数：title_id
 * return:$result
 */
function getOnlyTitle($title_id){
    require_once('dbc.php');
    $sql = 'SELECT * FROM title WHERE id = :id';
    $stmt = dbc()->prepare($sql);
    $stmt -> bindValue(":id",$title_id);
    $stmt -> execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt = null;
    $dbh = null;
    return $result;
}

/**
 * タイトル項目を削除
 * 引数:title_id
 * return:なし
 */
function delete_title($title_id){
    require_once('dbc.php');

    try{
        //タイトルテーブルから削除
    $sql = 'DELETE FROM title WHERE id = :id';
    $stmt = dbc()->prepare($sql);
    $stmt -> bindValue(":id",$title_id);
    $stmt -> execute();
        //コンテンツテーブルから削除
    $sql = 'DELETE FROM content WHERE title_id = :id';
    $stmt = dbc()->prepare($sql);
    $stmt -> bindValue(":id",$title_id);
    $stmt -> execute();

    $stmt = null;
    $dbh = null;

    } catch (PDOException $e){
        echo $e->getMessage;
        exit();
    }
}

function delete_content($id){
    require_once('dbc.php');

    try{
        $sql = 'DELETE FROM content WHERE id = :id';
        $stmt = dbc()->prepare($sql);
        $stmt -> bindValue(":id",$id);
        $stmt -> execute();

    $stmt = null;
    $dbh = null;

    } catch (PDOException $e){
        echo $e->getMessage;
        exit();
    }
}

