<?php
//XSS対応（ echoする場所で使用！それ以外はNG ）
function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

//SESSIONチェック



//リダイレクト関数: redirect($file_name)



//DB接続関数：db_conn()




//SQLエラー関数：sql_error($stmt)






