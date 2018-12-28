<?php

function C($k,$v){
    static $cfg = array();
    $cfg[$k]=$v;
    return $cfg;}
print_r(C('host','localhost'));
print_r(C('Debug',true));
print_r(C('pass','123'));
?>
