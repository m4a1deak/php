<?php 
require("./conn.php");
$id = $_GET['id'];
if(empty($_POST)){
	$sql = "select * from msg where id='$id'";
	$res = mysql_query($sql);
	if(!$res){
		echo mysql_error();
		echo "zzzz";
		exit();
	}
	$arr = mysql_fetch_assoc($res);
	require("./megedit.html");
}else{
	$sql = "update msg set name='$_POST[name]',email='$_POST[email]',content='$_POST[content]' where id=$id ";
	//print_r($sql);
	$res = mysql_query($sql);
	if(!$res){
		echo mysql_error();
		echo "出错了";
		exit();
	}else{
		echo "修改成功";
	}
}	
 














 ?>
