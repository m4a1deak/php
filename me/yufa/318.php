<?php 
$arr = array("001"=>"张三","001"=>"李四","003"=>"王五");
print_r($arr);
echo $arr["001"];

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

$aaa = 123;
echo "今天是",$aaa,"号";
echo "今天是$aaa号";//不行

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";


for($i=1;$i<=100;$i++){
	if($i%3==0){
		echo 'Fizz <br/>';
	}else if($i%5==0){
		echo 'Buzz <br/>';
	}
	else if($i%3==0&&$i%5==0){
		echo 'abcde <br/>';
	}else{
		echo $i,'<br/>';
	}
	
 }
?>