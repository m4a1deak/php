<?php
require('./lib/init.php');
if(!acc()){header("location:login.php");}
$art_id = $_GET['art_id'];
if(!is_numeric($art_id)){fail("不合法");}
$sql = "select count(*) from art where art_id='$art_id'";
if(mGetOne($sql)==0){fail("没有这篇文章");}
if(empty($_POST)){
    $sql = "select title,content,cat_id from art where art_id='$art_id'";
    $arts = mGetRow($sql);
    $sql = "select catname,cat_id from cat";
    $catname = mGetAll($sql);
    require(ROOT .'/view/admin/artedit.html');
}else{if(empty(trim($_POST['title']))){fail("标题不能为空");}
    $sql = "select count(*) from art where title='$_POST[title]'";
    if(mGetOne($sql) != 0){fail("文章名已经存在");}
    if(empty(trim($_POST['content']))){fail("内容不能为空");}
    $art['title'] = trim($_POST['title']);
    $art['content'] = trim($_POST['content']);
    $art['cat_id'] = trim($_POST['cat_id']);
    $art['lastup'] = time();
    if(mExec('art',$art,'update',"art_id=$art_id")){succ("文章修改成功");}
}
?>
