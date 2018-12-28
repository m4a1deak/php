<?php
$arr1 = array(1,2,3,array(4,array(5,6)));
function sum($arr){
    foreach($arr as $k=>$v){
        if(is_int($v)){
            $i = $i + $v;
        }else if(is_array($v)){
            $i = $i + sum($v);
        }
    }
    return $i;
}
echo sum($arr1);

?>
