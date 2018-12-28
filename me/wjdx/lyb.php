<?php 
$fn=fopen("./jsb.txt","r");
for($i=1;($row = fgetcsv($fn) )!= false;$i++)
{
	echo "<li><a href='jsb.php?tid=" ,$i ,"'>" , $row[0] , "</a></li>";
}
 ?>