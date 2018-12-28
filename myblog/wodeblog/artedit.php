<?php
require('./lib/init.php');
//获取地址栏参数
$art_id = $_GET['art_id'];
//检测art_id
if(!is_numeric($art_id)){
    fail("不合法");
}
//检测是否有这篇文章
$sql = "select count(*) from art where art_id='$art_id'";
if(mGetOne($sql)==0){
    fail("没有这篇文章");
}
//判断post
if(empty($_POST)){
    //表单提交为空时
    //获取当前文章信息
    $sql = "select title,content,cat_id from art where art_id='$art_id'";
    $arts = mGetRow($sql);
    //获取所有栏目
    $sql = "select catname,cat_id from cat";
    $catname = mGetAll($sql);
    //引入html文件
    require(ROOT .'/view/admin/artedit.html');
}else{
    //表单进行提交时
    //检测标题
    if(empty(trim($_POST['title']))){
        fail("标题不能为空");
    }
    //判断文章名是否存在
    $sql = "select count(*) from art where title='$_POST[title]'";
    if(mGetOne($sql) != 0){
        fail("文章名已经存在");
    }
    //判断文章内容是否为空
    if(empty(trim($_POST['content']))){
        fail("内容不能为空");
    }
    $art['title'] = trim($_POST['title']);
    $art['content'] = trim($_POST['content']);
    $art['cat_id'] = trim($_POST['cat_id']);
    $art['lastup'] = time();
    //修改文章
    if(mExec('art',$art,'update',"art_id=$art_id")){
        succ("文章修改成功");
    }

}

?>
