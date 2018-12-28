<?php
require('./smarty/Smarty.class.php');
$sm = new Smarty;
$n =mt_rand(3,6);
$news = array(
    array('id'=>1,'title'=>'11','pubtime'=>1345213687),
    array('id'=>2,'title'=>'22','pubtime'=>1425632587),
    array('id'=>3,'title'=>'33','pubtime'=>125467582),
    array('id'=>4,'title'=>'33','pubtime'=>123654687),
);
$sm->assign('xxx' , $news);
//$sm->assign('n',$nn);
//$sm->assign('n',$n);
$sm->display('3.html');
?>
