<?php 
//mysql_close 关闭MySQL连接
$conn = mysql_connect('localhost','root','12345678');
mysql_query('use text',$conn);
mysql_query("set names utf8",$conn);

//var_dump($conn);

$sql = 'delete from user where uid=5';
$row = mysql_query($sql);

if($rwo === false){
	echo mysql_error();
	exit();
}


$close = mysql_close($conn);
//var_dump($close);
var_dump($conn);



 ?>