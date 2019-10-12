<?php
//1,sessionstart
session_start();

//2,DB接続
include("funcs.php");
sschk();
$pdo = db_conn();

//3,データ登録SQL
$sql = "SELECT * FROM gs_bm_user_table WHERE lid=:lid AND life_flg=0";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':lid', $_POST["lid"], PDO::PARAM_STR);
$status = $stmt->execute();

//4,error処理
if($status==false){
    sql_error();
}

//5, 抽出データ数を取得
$val = $stmt->fetch(); //登録データから該当する1つを取得 

//6,ログイン
//成功時セッションにidを設定
if(password_verify($_POST["lpw"],$val["lpw"])){
    $_SESSION["chk_ssid"]  = session_id();
    $_SESSION["kanri_flg"] = $val['kanri_flg'];
    $_SESSION["name"]      = $val['name'];
    redirect("kadaiselect.php");
  }else{
    //Login失敗時(Logout経由)
    redirect("kadailogin.php");
  }
  
  exit();
?>