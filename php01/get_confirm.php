<?php
//function h ($v){
//    return htmlspecialchars($v,ENT_QUOTES);
//}
//埋め込まれたフィッシングサイトをブロックする関数

include("funcs.php");

$name = $_POST["name"]; 
$mail = $_POST["mail"];
//get と　postの違いは、URLにくっつけて送るか裏で送るかの違い


?>
<html>
<head>
<meta charset="utf-8">
<title>GET練習（受信）</title>
</head>
<body>
お名前：<?php echo h($name);?>
Mail：<?php echo h($mail);?>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>