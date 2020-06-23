<?php
	// 現在日時を表示
	echo date('Y年m月d日 lの登録');

?>
<html>
<head>
<meta charset="utf-8">
<title>POST練習</title>
</head>
<body>
<!-- getと違うのは飛び先と methodの部分のみ postは裏で飛ぶイメージ -->
<form action="post_confirm.php" method="post">
	お名前: <input type="text" name="name">
	EMAIL: <input type="text" name="mail">
	<input type="submit" value="送信">
</form>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>