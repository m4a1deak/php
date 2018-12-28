<?php
require('./lib/init.php');
if(!acc()){header("location:login.php");}
$comment_id=$_GET['comment_id'];
if(!is_numeric($comment_id)){fail("不合法");}
$sql = "select count(*) from comment where comment_id='$comment_id'";
if(mGetOne($sql)==0){fail("没有这个留言");}
$sql = "select art_id from comment where comment_id='$comment_id'";
$art = mGetRow($sql)['art_id'];
$sql = "delete from comment where comment_id='$comment_id'";
if(mQuery($sql)){
    $sql = "update art set comm=comm-1 where art_id='$art'";
    if(mQuery($sql)){header("location:commlist.php");}
}
?>
