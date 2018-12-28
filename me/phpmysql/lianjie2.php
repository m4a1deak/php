<?php 
$conn = mysql_connect('localhost','root','12345678');
mysql_query('set names utf8',$conn);
mysql_query('use text',$conn);

//var_dump($conn);

$sql = 'select * from user';
$res = mysql_query($sql);

//当没有那行时 返回false
//mysql_fetch_assoc($res)
//第14行执行一次 第15行执行一次 才开始打印
//while(mysql_fetch_assoc($res) != false){
//	print_r(mysql_fetch_assoc($res));
//	echo "<br>";
// }

$data = array();
while(($row = mysql_fetch_assoc($res)) != false){
	//print_r($row);
	$data[] = $row;
	//echo "<br>";
 }
 print_r($data);
?>