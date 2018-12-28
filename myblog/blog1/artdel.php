<?php
require('./lib/init.php');
if(!acc()){header("location:login.php");}
$art_id = $_GET['art_id'];
if(!is_numeric($art_id)){fail("不合法");
}
//判断有没有这篇文章
$sql = "select count(*) from art where art_id='$art_id'";
if(mGetOne($sql) == 0){
    fail("没有这篇文章");
}
//查询这篇文章的栏目id
$sql = "select cat_id from art where art_id='$art_id'";
$cat = mGetRow($sql)['cat_id'];
//删除
$sql = "delete from art  where art_id='$art_id'";
if(mQuery($sql)){
    //栏目下文章数-1
    $sql = "update cat set num=num-1 where cat_id='$cat'";
    if(mQuery($sql)){
        succ("删除成功");
    }
}
?>
