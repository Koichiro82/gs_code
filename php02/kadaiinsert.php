<?php
//1,POSTデータ取得
    $bookname = $_POST["bookname"];
    $bookurl  = $_POST["bookurl"];
    $comment  = $_POST["comment"];
    $cs       = $_POST["cs"];



//2,データベースアクセス
    try{
        $pdo = new PDO('mysql:dbname=bm_db;charset=utf8;host=localhost','root','root');
        } catch (PDOException $e) {
        exit('DB Connection Error:'.$e->getMessage());
        }


//3,データ登録SQL作成
    $stmt = $pdo->prepare("INSERT INTO bm_table(bookname,bookurl,comment,cs,indate) VALUES(:bookname,:bookurl,:comment,:cs,sysdate())");
    $stmt->bindValue(':bookname', $bookname, PDO::PARAM_STR);
    $stmt->bindValue(':bookurl', $bookurl, PDO::PARAM_STR);
    $stmt->bindValue(':comment', $comment, PDO::PARAM_STR);
    $stmt->bindValue(':cs', $cs, PDO::PARAM_STR);
    $status = $stmt->execute();


//4,データ登録処理後
    if($status==false){
        $error = $stmt->errorInfo();
        exit("SQLError:".$error[2]);
    }else{
        include("funcs.php");
        redirect("kadaiindex.php");
    }
?>