<?php
require('./lib/init.php');
//获取地址栏参数
$cat_id = $_GET['cat_id'];
//栏目
$sql = "select * from cat";
$cats = mGetAll($sql);


//判断地址栏是否有cat_id
if(isset($_GET['cat_id'])){
    $where = " and art.cat_id=$cat_id";
}else{
    $where = '';
}
//分页代码
//获取所有文章数 如果有catid那么获取栏目下的所有文章数
$sql = "select count(*) from art where 1".$where;
$num = mGetOne($sql);
if($num == 0){
    //如果当前栏目下没有文章 跳往首页
    header("location:index.php");
}
//获得当期页码数
$curr = isset($_GET['page']) ? $_GET['page'] : 1;
//每页显示条数
$cut=5;
//分页 获得数组
$page = getPage($num,$curr,$cut);
//查询文章文章
$sql = "select cat.cat_id,art_id,catname,thumb,title,content,pubtime,comm from art left join cat on art.cat_id=cat.cat_id where 1" .$where ." order by art.art_id desc limit ".($curr-1)*$cut.",".$cut;
$arts = mGetAll($sql);
require(ROOT . '/view/front/index.html');
?>
