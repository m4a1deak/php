<?php
require('./lib/init.php');
if(!acc()){header("location:login.php");}
$cat_id = $_GET['cat_id'];
if(!is_numeric($cat_id)){fail("栏目不合法");}
$sql = "select count(*) from cat where cat_id='$cat_id'";
if(mGetOne($sql) == 0){fail("没有这个栏目");}
$sql = "select num from cat where cat_id='$cat_id'";
if(mGetOne($sql) != 0){fail("该栏目下还有文章");}
$sql = "delete from cat where cat_id='$cat_id'";
if(mQuery($sql)){succ("栏目删除成功");}
?>
