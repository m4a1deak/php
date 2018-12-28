<?php 

/*print_r($_SERVER);
//web服务器的环境
echo "<hr>";
print_r($_ENV);
echo "<hr>";

echo "<hr>";
echo "<hr>";
echo "<hr>";

echo "<hr>";
echo getenv('COMPUTERNAME');//计算机名字
echo "<hr>";*/
$a = 1;
$b = 2;
function txt(){
	print_r($GLOBALS);
	$GLOBALS['a']=11;
}
txt();
echo $a;

 ?>