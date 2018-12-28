<?php 

$fn = fopen("jishiben.txt","r");
for($i=1;($row=fgetcsv($fn))!=false;$i++){
	echo "<li><a href='111.php?tid=" ,$i, "'>" ,$row[0], "</a></li>";
}

 ?>