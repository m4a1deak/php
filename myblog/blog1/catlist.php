<?php
//引入配置文件
require('./lib/init.php');
if(!acc()){header("location:login.php");}
$sql = "select * from cat";
$cats = mGetAll($sql);
require(ROOT.'/view/admin/catlist.html')
?>
