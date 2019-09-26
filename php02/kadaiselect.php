<?php

//1,データベースアクセス
    try{
        $pdo = new PDO('mysql:dbname=bm_db;charset=utf8;host=localhost','root','root');
        } catch (PDOException $e) {
        exit('DB Connection Error:'.$e->getMessage());
        }


//2,データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM bm_table");
$status = $stmt->execute();


//3,データ表示
$view="";
if($status==false){
    $error = $stmt->errorInfo();
    exit("SQLError:".$error[2]);
}else{
    while( $r = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    $view .= $r["id"]."|".$r["bookname"]."|".$r["bookurl"]."|".$r["cs"]."<br>";
  }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>フリーアンケート表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="kadaiindex.php">データ登録</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container navi"><?=$view?></div>
</div>
<!-- Main[End] -->

</body>
</html>
