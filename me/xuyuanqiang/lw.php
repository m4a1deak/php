<meta charset=utf8>
<?php
$conn = mysql_connect('localhost','root','12345678');
mysql_query('set names utf8',$conn);
mysql_query('use text',$conn);

$rtop = mt_rand(0,419);
$rleft = mt_rand(0,690);
$arr = array('o1.gif','o2.gif','o3.gif');
$pic = $arr[array_rand($arr)];
if(!empty($_POST)){

	$sql = "insert into lovewall(addressee,sender,content,rtop,rleft,pic) values('$_POST[addressee]','$_POST[sender]','$_POST[content]','$rtop','$rleft','$pic')";

	if(!mysql_query($sql)){
		echo mysql_error();
		echo "错误l";
		exit();
	}else{
		echo "hao";
		$ref = $_SERVER['HTTP_REFERER'];
		header("location:$ref");
	}
}
$sql = "select * from lovewall";
$res = mysql_query($sql);
$data = array();
while($row = mysql_fetch_assoc($res)){
	$data[]=$row;
}
require('./lw.html');
 ?>