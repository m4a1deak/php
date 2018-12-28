<?php 
$conn = mysql_connect('localhost','root','12345678');
mysql_query('use text',$conn);
mysql_query('set names utf8',$conn);

//var_dump($conn);


$sql = 'select * from user';
$res = mysql_query($sql);
print_r(mysql_fetch_assoc($res));
//从结果集中取得一行作为关联数组
print_r(mysql_fetch_array($res));
//从结果集中取得一行作为关联数组,或数字数组,或二者兼有
print_r(mysql_fetch_row($res));
//从结果集中取得一行作为索引数组






 ?>