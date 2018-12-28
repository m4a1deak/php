<?php
$arr = array(1,2,3,4,5);
//求他们的平方

//定义一个函数 指定数的平方
function pf($n){
    return $n*$n;
}
$arr = array_map('pf',$arr);
echo "<pre>";
print_r($arr);

/*foreach($arr as $k=>$v){
    $arr[$k]=$v*$v;
}
print_r($arr);*/


