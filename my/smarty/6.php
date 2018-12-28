<?php
require './smarty/Smarty.class.php';
$sm = new Smarty;
$sm->caching=true;
//缓存周期   以秒为单位
$sm->cache_lifetime=3;
$a = 'sdgfsdf';
$id = $_GET['id'];
if(!$sm->isCached('6.html',$id)){
    $sm->assign('a',$id);
    echo 'hahe';
}

$sm->display('6.html',$id);
?>
