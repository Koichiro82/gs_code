<?php
//共通に使う関数を記述

//XSS対応（ echoする場所で使用！それ以外はNG ）
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}

//DB接続関数
function db_conn(){
    try {
      return new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');
    } catch (PDOException $e) {
      exit('DB Connection Error:'.$e->getMessage());
    }
  }

//SQLエラー
function sql_error(){
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("SQLError:".$error[2]);
  }


//redirect関数
//redirect("index.php"); といったように()内にファイル名を入れる
  function redirect($file_name){
    //５．index.phpへリダイレクト
      header("Location: ".$file_name);
      exit();
    }