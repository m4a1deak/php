<?php 

/*for($i=1,$x=0;$i<20;$i++){
	echo $i;
	$x = $x+1;
	if($x%5==0){
		echo "<br>";
	}
}

echo "<br>";
echo "<hr>";
echo "<table border='1'><tr><td>1</td><td>2</td></tr></table> ";*/

echo "<table border=1>";
for($a=1;$a<=5;$a++){
	echo "<tr>";
	for($b=1;$b<=4;$b++){
		echo "<td>";
		echo $a,$b;
		echo "</td>";
	}
	echo "</tr>";
}
echo "</table>";

echo "<hr>";

 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border=1>
		<?php for($a=1;$a<=5;$a++){ ?>
		<tr>
			<?php for($b=1;$b<=4;$b++){ ?>
			<td><?php echo $a,$b; ?></td>
			<?php } ?>
		</tr>
		<?php } ?>
	</table>
</body>
</html>