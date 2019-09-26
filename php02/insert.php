<?php
//1. POSTデータ取得
//$name = filter_input( INPUT_GET, ","name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ
$name   = $_POST["name"];
$email  = $_POST["email"];
$naiyou = $_POST["naiyou"];


//2. DB接続します
include("funcs.php");
$pdo = db_conn();

//try {
  //Password:MAMP='root',XAMPP=''
  //new PDOはDBに接続するための関数
  //hostは本番サーバーを使ったりする場合は、そのhost名に変換           //MAMP  id↓   PASS↓
//   $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');
// } catch (PDOException $e) {
//   exit('DB Connection Error:'.$e->getMessage());
// }



//３．データ登録SQL作成 
//->は、stmtの中にbindValueが入っているという意味
//bindValueは（）内に危ない文字などが入ってきた場合でも無効化してくれる関数
$stmt = $pdo->prepare("INSERT INTO gs_an_table(name,email,naiyou,indate) VALUES(:name,:email,:naiyou,sysdate())");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)←セキュリティを上げるための第3引数
$stmt->bindValue(':email', $email, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':naiyou', $naiyou, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行



//４．データ登録処理後
if($status==false){
  sql_error();
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）エラーが起きた時に判明するようにする処理
  // $error = $stmt->errorInfo();
  // exit("SQLError:".$error[2]);
}else{
  redirect("index.php");
  // //redirect("index.php"); といったように()内にファイル名を入れる
  // function redirect($file_name){
  // //５．index.phpへリダイレクト
  //   header("Location: ".$file_name);
  //   exit();
  // }
}
?>
