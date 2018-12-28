<?php 
for($i=1,$c=0;$i<100;$i++){
	if($i%2==0){
		echo $i," ";
		$c = $c + 1;
		if($c%5==0){
			echo "<br>";
		}
	}	
}


 ?>