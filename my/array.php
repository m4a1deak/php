<?php
$a = 1;
$b = 2;
$c = 3;
$arr = array('a'=>array(1=>'a'),'b'=>array(1=>'a'),'child'=>array(1=>'a'));
$res = array();
foreach($arr as $v){
    $childs = 123;
    $v['child']=$childs;
    $res[] = $v;

    }


print_r($arr);
print_r($res);