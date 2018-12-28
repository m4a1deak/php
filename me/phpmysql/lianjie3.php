<?php 
//mysql_erroe返回上一个MySQL操作产生的文本错误信息

$conn = mysql_connect('localhost','root','12345678');
mysql_query('set names utf8',$conn);
mysql_query('use text',$conn);

//var_dump($conn);

$sql = 'select * from user';
$res = mysql_query($sql);
if($res === false){
	echo mysql_error();
	exit();//结束程序
}

$data = array();
while(($row = mysql_fetch_assoc($res)) != false){
	$data[] = $row;
}
print_r($data);
 ?>