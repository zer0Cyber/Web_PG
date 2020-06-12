<?php
$file = fopen('./data/data.txt', r);

$contents = fread($file, filesize('./data/data.txt'));
fclose($file);

echo $contents;

?>

<html>
  <head>
    <meta charset="UTF-8">
    <title>読み込み</title>
  </head>
  <body>
    <li><a href="post.php">入力画面に戻る</a></li>
  </body>
</html>