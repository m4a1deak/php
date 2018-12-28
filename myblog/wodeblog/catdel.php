<?php
//引入配置文件
require('./lib/init.php');
//接收地址栏参数
$cat_id = $_GET['cat_id'];
//is_numeric检测变量是否是数字或数字字符串
//检测是否合法
if(!is_numeric($cat_id)){
    fail("栏目不合法");
}
//检测是否有这个栏目
$sql = "select count(*) from cat where cat_id='$cat_id'";
if(mGetOne($sql) == 0){
    fail("没有这个栏目");
}
//检测栏目下是否有文章
$sql = "select num from cat where cat_id='$cat_id'";
if(mGetOne($sql) != 0){
    fail("该栏目下还有文章");
}
//删除操作
$sql = "delete from cat where cat_id='$cat_id'";
if(mQuery($sql)){
    succ("栏目删除成功");
}

?>
