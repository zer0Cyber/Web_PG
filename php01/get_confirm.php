<?php
  $name = $_GET["name"];
  $mail = $_GET["mail"];



?>
<html>
<head>
<meta charset="utf-8">
<title>GET練習（受信）</title>
</head>
<body>
<!-- http://localhost/get_confirm.php?name=zer0&mail=zer0%40gmail.com -->
<!-- 送信後のURL  &は区切り URLにくっついて送信されるのはget 見えないのはPostを使う -->
お名前： <?=$name; ?>
Mail：<?=$mail; ?>g
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>