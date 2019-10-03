<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
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
<form method="POST" action="kadaiinsert.php">
  <div class="jumbotron">
      <fieldset>
         <legend>本の登録</legend>
           <label>書籍名<input type="text" name="bookname"></label><br>
           <label>著者<input type="text" name="author"></label><br>
           <label>書籍URL<input type="text" name="bookurl"></label><br>
           <label>コメント<br><textarea name="comment" cols="30" rows="5"></textarea></label><br>
           <label>評価<input type="radio" name="cs" value="満足">満足</label><br>
           <label>評価<input type="radio" name="cs" value="やや満足">やや満足</label><br>
           <label>評価<input type="radio" name="cs" value="普通">普通</label><br>
           <label>評価<input type="radio" name="cs" value="やや不満">やや不満</label><br>
           <label>評価<input type="radio" name="cs" value="不満">不満</label><br>
           <input type="submit" value="送信">
      </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>