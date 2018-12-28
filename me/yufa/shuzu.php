<?php 


$arr = array('a','b','c','d');
//查
echo $arr[2];//c
echo '<br>';
//增
$arr[4]="e";
print_r($arr);

echo '<br>';
//删
unset($arr[0]);
print_r($arr);

echo '<br>';
//改

$arr[3] = "aaa";
print_r($arr);
echo '<br>';







$arr1 = array('name'=>'lisi','aihao'=>array('zuqiu','lanqiu','pingpang'));
print_r($arr1);

echo '<br>';





echo "<hr>";
$stu = array('lisi'=>3,'wang'=>5,'zhao'=>6);
foreach ($stu as $k => $v) {
	$stu[$k] = $v*2;
}
print_r($stu);


 ?>