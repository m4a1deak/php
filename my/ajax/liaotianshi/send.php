<?php
//发表聊天消息 服务器端
$link = mysql_connect('localhost','root','12345678');
mysql_query('use text',$link);
mysql_query('set name utf8');
$msg = trim($_POST['msg']);
$receiver = trim($_POST['receiver']);
$color = trim($_POST['color']);
$biaoqing = trim($_POST['biaoqing']);
$sql = "insert into message values(null,'$msg','admin','$receiver','$color','$biaoqing',now())";
if(mysql_query($sql)){
    echo 1;
}else{
    echo 0;
}
?>
