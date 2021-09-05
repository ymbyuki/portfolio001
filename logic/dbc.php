<?php

//データベースの設定を読み込み
require_once('define.php');

/**
 * データベースへの接続
 * 引数：なし
 * return: $dbh
 */
function dbc() {
    $host = DB_HOST;
    $db   = DB_NAME;
    $user = DB_USER;
    $pass = DB_PASS;

    $dns = "mysql:host=$host;dbname=$db;charset=utf8mb4";

    try{
        $dbh = new PDO($dns, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
        ]);
        return $dbh;
    } catch (PDOException $e) {
        echo "接続失敗" . $e -> getMessage();
        exit();
    }
}