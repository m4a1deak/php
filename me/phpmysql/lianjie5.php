<?php 


//mysql_affected_rows 获取前一次MySQL操作影响的记录行数
$conn = mysql_connect('localhost','root','12345678');
mysql_query('use text',$conn);
mysql_query('set names utf8',$conn);

$sql = 'insert into user values(13,"yulei",17),(14,"zuozhu",19),(15,"mingren",6)';
$res = mysql_query($sql);

if($res === false){
	echo mysql_error();
	exit();
}

echo mysql_affected_rows();//3


?>