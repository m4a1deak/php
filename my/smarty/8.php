<?php
require './smarty/Smarty.class.php';

$sm = new Smarty;

$sm->caching=true;

$sm->cache_lifetime=3;
function insert_ss(){
    echo "11111";
}
$sm->assign('a','aaaa',true);
$sm->assign('b','bbbb');

$sm->display('8.html');
?>
