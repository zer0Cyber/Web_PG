<?php 
  // $a = "山崎";
  // $b = "小山";
  
  // rand(min, max);
  $num = rand(1, 5);

  if($num == 1) {
    echo "大吉";
  } else if($num == 2) {
    echo "中吉";
  } else if($num == 3) {
    echo "小吉";
  } else if($num == 4) {
    echo "吉";
  } else {
    echo "大凶";
  }
// ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ランダムおみくじ練習</title>
</head>
<body>
  <p>Hello World</p>
  <?php
  // echo $a;
  // echo $b;
  ?>
  <!-- method get, post getは飛ばしたあとに特徴がでる action 飛ばす場所 -->
  <form  method = "get" action="get" ></form>
</body>
</html>