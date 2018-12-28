<?php 
/*for($i = 0 ; $i < 300 ;$i++){
	if($i<=9 && $i!=4){
		echo $i,"<br>";
	}else if($i<=99 && $i%10!=4 && $i/10!=4){
		echo $i,"<br>";
	}else if($i%10!=4 && $i/10!=4){
		echo $i,"<br>";
	}
}*/
for($x=0;$x<3;$x++){
	for($y=0;$y<10;$y++){
		for($z=0;$z<10;$z++){
			if($x!=4 && $y!=4 && $z!=4){
				echo $x*100+$y*10+$z,"<br>";
			}
		}
	}
}

 ?>