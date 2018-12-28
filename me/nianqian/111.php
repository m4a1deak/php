<?php 
$tid = $_GET[tid];
$fn = fopen("jishiben.txt",'r');
for($i=1;($row=fgetcsv($fn))!=false;$i++){
	if($i == $tid){
			echo "<h1>",$row[0],"</h1>";
	echo "<p>",$row[1],"</p>";
	}

}

 ?>