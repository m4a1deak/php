<?php
$link = mysql_connect('localhost','root','12345678');
mysql_query('use text',$link);
mysql_query('set name utf8');
function danyinhao($data){
    if(empty($data)){
        return $data;
    }
    return is_array($data)?array_map('danyinhao',$data):addslashes($data);
}
//批量实体转义
function deepspecialchars($data)
{
    if (empty($data)) {
        return $data;
    }
//中级写法
    return is_array($data) ? array_map('deepspecialchars', $data) : htmlspecialchars($data);
}
/*$c=3;
$_SESSION['a'][$c]=1;
$_SESSION['b'][]=2;
print_r($_SESSION);*/
?>
