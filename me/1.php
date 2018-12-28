<?php
$a = "男装";
$b=array(1=>array('男装','女装'),2=>'男装');
if(in_array($a,$b)){
    echo '有的';
}
echo "<br>";
$number = array(array(1,2,3),array(1,2,3),array(1,2,3));
echo count($number,1);//12 //递归的计算数组个数
echo "<br>";
$aaa = array('a','b','c','d');
$index = array_search('a',$aaa);// 搜索给定的值 成功则返回键名
if($index == false){
    echo 'no';
}else{
    echo "index=".$index;
}
var_dump(array_search('a',$aaa));//0
echo "<br>";
$a=1;
//$a=++;
echo $a;
echo "<br>";
$a = '1 or 1';
var_dump(int($a));
var_dump($a+0);
?>
