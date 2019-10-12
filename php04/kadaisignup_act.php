<?php
//最初にSESSIONを開始！！ココ大事！！
session_start();

//1. signupがPOSTされたときに下記を実行
  $name   = $_POST["name"];
  $lid    = $_POST["lid"];
  $lpw    = $_POST["lpw"];
  $lpw  = password_hash($lpw, PASSWORD_DEFAULT);

//2. DB接続
  include("funcs.php");
  sschk();
  $pdo = db_conn();

//３．データ登録SQL作成
  $stmt = $pdo->prepare("INSERT INTO gs_bm_user_table(name,lid,lpw) VALUES(:name,:lid,:lpw)");
  $stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
  $stmt->bindValue(':lid',  $lid,  PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
  $stmt->bindValue(':lpw',  $lpw,  PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
  $status = $stmt->execute(); //実行

//４．データ登録処理後
if($status==false){
  sql_error();
}else{
  redirect("kadailogin.php");
}
?>