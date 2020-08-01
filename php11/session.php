<?php
session_start();

$_SESSION["name"]= "yamazaki";

$_SESSION["email"]= "test@test.jp";

echo $_SESSION["name"];

?>