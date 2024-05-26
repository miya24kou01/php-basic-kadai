<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>課題011</title>
</head>
<body>
<p>
 <?php
 $personal_data=['name'=>'玉ねぎ','price'=>200,'place'=>'北海道'];
 foreach($personal_data as $key=>$value){
    echo"{$key}:{$value}<br>";
 }
 ?>

<?php
 $personal_data=['id'=>'1','name'=>'侍太郎','age'=>'30'];
 foreach($personal_data as $key=>$value){
    echo"{$key}:{$value}<br>";
 }
 ?>
</p>

</body>
</html>