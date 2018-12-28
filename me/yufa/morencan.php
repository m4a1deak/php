<?php

$GLOBALS['var1']=5;
$var2 = 1;
function get_value(){
    global $var2;
    $var1 = 0;
    return $var2++;
}
get_value();
echo $var1,' ',$var2;//5  2
var_dump(function_exists(get_value));
function abc(){

}
var_dump(function_exists(abc));
$xxx = getenv($REMOTE_ADDR);
var_dump($xxx);
?>
