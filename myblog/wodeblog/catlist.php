<?php
//引入配置文件
require('./lib/init.php');
//获取所有栏目数据
$sql = "select * from cat";
//定义数组名
$cats = mGetAll($sql);
//引入html文件
require(ROOT.'/view/admin/catlist.html')

?>
