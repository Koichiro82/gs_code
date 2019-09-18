<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="box">
    <div class="bgImg src1"></div>
    <div class="bgImg src2"></div>
    <div class="bgImg src3"></div>
    <div class="bgImg src4"></div>
    <div class="title">身体数値化</div>
</div>
<div class="wrap">
    <div class="formbox">
        <div class="inputnumber">数値入力</div>
        <form action="kadaiwrite.php" method="post">
            <div id="sprint">スプリント力ーー <input type="text" name="sprint">秒</div><br>
            <div id="speed">敏捷性ーーーーー <input type="text" name="speed">回</div><br>
            <div id="long">持久力ーーーーー <input type="text" name="long">秒</div><br>
            <div id="short">瞬発力ーーーーー <input type="text" name="short">秒</div><br>
            <div id="jump">ジャンプ力ーーー <input type="text" name="jump">cm</div><br>
            <input type="submit" value="送信">
        </form>
    </div>
    <div class="radarbox">
        <div class="radartitle">レイダーチャート</div>
        <div class="radarchart"></div>
    </div>
</div>

<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>