<?php
$arr = array(
    1,
    array(21,22,23,24,25),
    3,
    array(41,42,43,array(50,51,52)),
);
function add($a){
    $i = 0;
    $num = 0;
    foreach($a as $v){
        if(is_array($v)){
            $i = $i +1;
            $num = $num + add($v);
            $i = $i +add($v);
        }else{
            $num = $num+ $v;
        }
        //echo $i;
    }
    return $num;
}
//echo add($arr);
function cnt($a){
    $num = 0;
    foreach($a as $v){
        if(is_array($v)){
            $num = $num+1;
            $num = $num + cnt($v);
        }
    }
    return $num;
}
echo add($arr)/(count($arr,1)-cnt($arr));
//echo add($arr);