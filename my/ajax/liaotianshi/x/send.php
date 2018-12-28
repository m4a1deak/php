<?php
//发表聊天消息 服务器端
require('./init.php');
$msg  = danyinhao(trim($_POST['msg']));
$msg  = deepspecialchars(trim($_POST['msg']));
$receiver = trim($_POST['receiver']);
$color = trim($_POST['color']);
$name = trim($_POST['username']);
$biaoqing = trim($_POST['biaoqing']);
$sql = "insert into message values(null,'$msg','$name','$receiver','$color','$biaoqing',now())";
if(mysql_query($sql)){
    echo 1;
}else{
    echo 0;
}
?>
