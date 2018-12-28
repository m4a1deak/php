<?php 
require('./conn.php');
if(empty($_POST)){
	require('./index.html');
}else{	
	$sql = "insert into msg(name,email,content) values ('$_POST[name]','$_POST[email]','$_POST[content]')";
	//在sql语句中不加引号
	$res = mysql_query($sql);
	if($res === false){
		echo mysql_error();
		exit();
	}else{
		echo "插入成功";
	}
}

 ?>