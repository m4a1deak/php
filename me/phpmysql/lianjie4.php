<?php 
//mysql_insert_id 取得上一步INERT操作产生的ID;
$conn = mysql_connect('localhost','root','12345678');
mysql_query('use text',$conn);
mysql_query('set names utf8',$conn);

$sql = 'insert into user values(12,"xiaoda",123)';
$res = mysql_query($sql);

if($res === false){
	echo mysql_error();
	exit();
}

echo mysql_insert_id();


 ?>