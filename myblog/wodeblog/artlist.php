<?php

require('./lib/init.php');

if(!acc()){
    //header("location:login.php");
}
//分页
//获取文章总数
$sql = "select count(*) from art";
$sum = mGetOne($sql);
//一页显示几个
$cut = 10;
//当前页码
$curr = isset($_GET['page'])? $_GET['page']:1;
if(!is_numeric($curr)){
    fail("页数不合法");
}
if($curr>ceil($sum/$cut)){
    fail("没有这一页");
}
//计算
$page = getPage($sum,$curr,$cut);
//跳过几个取几个  获取文章信息
$sql = "select art_id,pubtime,title,catname,comm from art left join cat on art.cat_id=cat.cat_id order by art.art_id desc limit ".  ($curr-1)*$cut.",".$cut;
//定义数组
$arts = mGetAll($sql);

require(ROOT.'/view/admin/artlist.html');
?>
