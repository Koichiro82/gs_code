<?php
//１．index.phpから取得
$id = $_GET["id"]; //?id~**を受け取る
//echo $id;
include("funcs.php");
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table WHERE id=:id");
$stmt->bindvalue(":id",$id,PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
if($status==false) {
  sql_error();
}else{
    $row = $stmt->fetch();
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ更新</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="kadaiselect.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="kadaiupdate.php">
  <div class="jumbotron">
    <fieldset>
      <legend>[編集]</legend>
        <label>書籍名：<input type="text" name="bookname" value="<?=$row["bookname"]?>"></label><br>
        <label>著者：<input type="text" name="author" value="<?=$row["author"]?>"></label><br>
        <label>ジャンル：<input type="text" name="genro" value="<?=$row["genro"]?>"></label><br>
        <label>書籍URL：<input type="text" name="bookurl" value="<?=$row["bookurl"]?>"></label><br>
        <label>コメント<br><textArea name="comment" rows="4" cols="40"><?=$row["comment"]?></textArea></label><br>
        <label>評価<input type="radio" name="cs" value="満足">満足</label><br>
        <label>評価<input type="radio" name="cs" value="やや満足">やや満足</label><br>
        <label>評価<input type="radio" name="cs" value="普通">普通</label><br>
        <label>評価<input type="radio" name="cs" value="やや不満">やや不満</label><br>
        <label>評価<input type="radio" name="cs" value="不満">不満</label><br>
        <input type="submit" value="送信">
        <input type="hidden" name="id" value="<?=$id?>"> <!--ブラウザ上は表示しない処理-->
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
