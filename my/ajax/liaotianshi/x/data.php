<?php
//随时获取最新的聊天消息
$link = mysql_connect('localhost','root','12345678');
mysql_query('use text',$link);
mysql_query('set name utf8');

$maxID=$_GET['maxID'];
//获取聊天消息 根据最大id做限制查询
$sql = "select * from message where id>".$maxID;
$res = mysql_query($sql);
$data = array();
while($row = mysql_fetch_assoc($res)){
    $data[] = $row;
}
echo json_encode($data);
//把最新的聊天信息通过json格式提供出来
