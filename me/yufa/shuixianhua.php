<?php 
for($i=0;$i<=9;$i++){
	for($x=0;$x<=9;$x++){
		for($z=1;$z<=9;$z++){
			if($z*100+$x*10+$i==$x*$x*$x+$z*$z*$z+$i*$i*$i){
				echo $z*100+$x*10+$i,'<br>';
			}
		}
	}
 }
?>