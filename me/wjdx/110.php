<?php 
	$str = $_POST[title].",".$_POST[content]."\n";
	$fn = fopen("./jsb.txt","a");	
	fwrite($fn, $str);
	fclose($fn);
	echo "已记录";
 ?>