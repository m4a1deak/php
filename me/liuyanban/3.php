<meta charset=utf8>
<?php 
 require('./conn.php');

 $id = $_GET['id'];

 $sql = "delete from msg where id='$id'";
 $res = mysql_query($sql);

 if(!$res){
 	echo mysql_error();
 	exit();
 }else{
 	//require("./2.php");
 	header('location:2.php');
 }


 ?>