<?php
$arr = array(13800013000,11145665110,1456161,111456478975611,1111,85681110001);
//集合
//$patt ='/^[012356890]{11}$/';
//补集
$patt = '/^[^47]{11}$/';
foreach($arr as $k=>$v){
    preg_match_all($patt,$v,$a);
    var_dump($a);
}
?>
