<?php

/*$a = 1;
function a(){
    $a = 2;
    return $a;
}
a();
echo $a;//1*/

/*$a = 2;
function b(){
    global $a;

    return $a;
}

echo b();//2*/

function t1(){
    global $var1,$var2;
    $var2 = &$var1;
    //$var1 = 10;
    //echo $var1,$var2;

}
function t2(){
    $GLOBALS['var3'] = &$GLOBALS['var1'];
}
$var1 = 5;
$var2 = $var3 =0;
t1();
echo $var2,"<br>";//0
echo $var1,"<br>";//5
t2();
echo $var3,"<br>";//5
echo $var1,"<br>";//5
?>
