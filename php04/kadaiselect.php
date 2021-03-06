<?php
include("funcs.php");
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false) {
  sql_error();
}else{
  while( $r = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    $view .= '<p>';
    $view .= '<a href="kadaidetail.php?id='.$r["id"].'">'; //?までがurl
    $view .= $r["id"]."|".$r["bookname"]."|".$r["author"]."|".$r["genro"]."|".$r["bookurl"]."|".$r["comment"]."|".$r["cs"];
    $view .= '<?a>';
    $view .= "　"; //リンクとリンクの空白部分
    $view .= '<a class="btn btn-danger" href="kadaidelete.php?id='.$r["id"].'">'; //?までがurl
    $view .= '[削除]';
    $view .= '</a>';
    $view .= '</p>';
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
      <a class="navbar-brand" href="kadaiindex.php">データ一覧</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?=$view?></div> <!-- ここに埋め込んでエコーしている-->
</div>
<!-- Main[End] -->

</body>
</html>
