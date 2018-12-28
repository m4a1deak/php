<?php
require('./lib/init.php');
if(!acc()){header("location:login.php");}
$cat_id = $_GET['cat_id'];
if(!is_numeric($cat_id)){fail("栏目不合法");}
$sql = "select count(*) from cat where cat_id='$cat_id'";
if(mGetOne($sql) == 0){fail("没有这个栏目");}
if(empty($_POST)){
    $sql = "select catname from cat where cat_id='$cat_id'";
    $catname = mGetRow($sql);
    require(ROOT . '/view/admin/catedit.html');
}else{
    $catname = $_POST['catname'];
    $sql = "update cat set catname='$catname' where cat_id='$cat_id'";
    if(mQuery($sql)){succ("修改成功");}
}
?>
