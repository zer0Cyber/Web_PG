<?php
  // XSS対策
  function h($value) {
    return htmlspecialchars($value, ENT_QUOTES);
  }


  // $flg = 0;
  $name = $_POST["name"];
  $mail = $_POST["mail"];

  //File書き込み
  $file = fopen("./data/data.txt","w");	// ファイル読み込み


  // //課題は$nameと$mailををカンマ区切りの文字列にして
  // ファイルに書き込めるようにしてください。
  fwrite($file, "$name,$mail\r\n");
  fclose($file);
  ?>
<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>
<!-- http://localhost/post_confirm.php postだとURLに送られたデータがつかないのがポイント -->
お名前： <?php echo h($name); ?>
<br>
EMAIL：<?php echo h($mail); ?>

<!-- HTMLの中にPHPを挟み込むことができる！ -->
<!--
<?php
  // if($flg == 0) {
?>
    <button>登録</button>
<?php
  // }
?> -->

<ul>
<li><a href="index.php">index.php</a></li>
<li><a href="read.php">書き込んだデータを確認する</a></li>
</ul>
</body>
</html>