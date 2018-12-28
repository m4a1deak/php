<?php
require './smarty/Smarty.class.php';
$sm = new Smarty;
$a = $_GET['a'];
$b = $_GET['b'];
//
function add($a,$b){
    if(!empty($a) && !empty($b)){//C层
        //M层
        return $a+$b;
    }
}
$c = add($a,$b);
$sm->assign('xx',$c);
$sm->display('10.html');
?>


