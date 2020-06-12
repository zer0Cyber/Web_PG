<?php
  // 文字を書き換える
  $a = "PHP_PHP_6_PHP_7_PHP_8";

  // 変数aをPHPをJSに書き換える
  $b = str_replace("PHP", "JS", $a);
  echo $b;

  // 文字列を配列に変換する
  $str_base = "PHP4, PHP5, PHP_7";

  $str = explode(",", $str_base);

  var_dump($str);
?>