<?php 
for($g=1;$g<=100;$g++){
	for($m=1;$m<=100;$m++){
		for($x=1;$x<=100;$x++){
			if(($g + $m + $x == 100)&&($g*5+$m*3+$x/3 ==100))
				{echo "公鸡" , $g , "母鸡" , $m , "小鸡" ,$x , "<br/>";}
		}
	}
}
echo "<br/>";
for($g=1;$g<=100;$g++){
	for($m=1;$m<=100;$m++){
			$x = 100-$g-$m;
			if($g*5+$m*3+$x/3 ==100)
				{echo "公鸡" , $g , "母鸡" , $m , "小鸡" ,$x , "<br/>";}		
	}
}
echo "<br / >";
for($g=1;$g<=18;$g++){
	for($m=1;$m<=32;$m++){
			$x = 100-$g-$m;
			if($g*5+$m*3+$x/3 ==100)
				{echo "公鸡" , $g , "母鸡" , $m , "小鸡" ,$x , "<br/>";				}	
	}
}








 ?>