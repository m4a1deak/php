<?php 

$conn = mysql_connect('localhost','root','12345678');
//var_dump($conn);
mysql_query('use text',$conn);
mysql_query('set names utf8',$conn);

$sql = 'select * from user';
$result = mysql_query($sql);
var_dump($result);
echo "<br>";

//$sql = 'insert into user values(9,"yangyang",18)';
//$res =mysql_query($sql);
//var_dump($res);


//$sql = 'delete from user where uid=9';
//$res = mysql_query($sql);
//var_dump($res);


//$sql = 'update user set name="chaoren",age=16 where uid=5';
//$res = mysql_query($sql);
//var_dump($res);


//$sql = 'select * from user';
//$res = mysql_query($sql);
//var_dump($res);
 
$sql = "select * from user";
$res = mysql_query($sql);
//var_dump($res);
print_r(mysql_fetch_assoc($res));
print_r(mysql_fetch_assoc($res));

 ?>