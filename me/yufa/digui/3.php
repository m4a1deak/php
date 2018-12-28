<?php
$arr1 = array(1,2,3,array('c',4,array(5,6)));
function multArr($arr){
    foreach($arr as $k=>$v){
        if(is_int($v)){
            $arr[$k] = $v*2;
        }else if(is_array($v)){
            $arr[$k] = multArr($v);
        }
    }
    return $arr;
}
print_r(multArr($arr1));
?>
