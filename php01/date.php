<?php
$d = date("YmdHis");
$d = 20;
//YmdHisの間や前後に様々な物を入れられる
echo '<style>';
if($d>1 && $d<18){
    echo 'body{background:#F00;}';
}else if($d>19 && $d<23){
    echo 'body{background:#000;}';
}
echo '</style>';
?>