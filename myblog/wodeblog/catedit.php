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
//判断有没有post
if(empty($_POST)){
    //查找出原catname
    $sql = "select catname from cat where cat_id='$cat_id'";
    $catname = mGetRow($sql);
    //引入html文件
    require(ROOT . '/view/admin/catedit.html');
}else{
    //有数据提交时
    $catname = $_POST['catname'];
    $sql = "update cat set catname='$catname' where cat_id='$cat_id'";
    if(mQuery($sql)){
        succ("修改成功");
    }

}

?>
