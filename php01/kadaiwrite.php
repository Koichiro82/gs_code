<?php
$sprint = $_POST["sprint"];
$speed  = $_POST["speed"];
$long   = $_POST["long"];
$short  = $_POST["short"];
$jump   = $_POST["jump"];
$c   = ",";
$str  = $sprint.$c.$speed.$c.$long.$c.$short.$c.$jump;
?>
<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>
<h1>書き込みました</h1>
<?php
//文字作成
$date = date("Y-m-d H:i:s");
//File書き込み
$file = fopen("data/kadaidata.txt","a");	// ファイル読み込み
fwrite($file, $date.$c.$str."\r\n"); //\はoptionキー+¥ .はJSでいう＋ 変数と変数をくっつける際に使う
fclose($file);
?>


<ul>
<li><a href="kadaipost.php">戻る</a></li>
</ul>
</body>
</html>