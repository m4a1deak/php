<?php
$arr = array(9,12,7,4,5,1);
         //  0 1 2 3 4 5
$length = count($arr);
for($i=$length-1;$i>=1;$i--){
    // 5 4 3 2 1
    $max = $i;
    for($j = $i-1;$j>=0;$j--){
        // 4 3 2 1 0
        if($arr[$max]<$arr[$j]){
            $max = $j;
        }
    }
    if($max != $i){
        $tmp = $arr[$max];
        $arr[$max] = $arr[$i];
        $arr[$i] = $tmp;
    }
    print_r($arr);
}
