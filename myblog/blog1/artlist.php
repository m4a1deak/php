<?php
require('./lib/init.php');
if(!acc()){header("location:login.php");}
$sql = "select count(*) from art";
$sum = mGetOne($sql);
$cut = 10;
$curr = isset($_GET['page'])? $_GET['page']:1;
if(!is_numeric($curr)){fail("页数不合法");}
if($curr>ceil($sum/$cut)){fail("没有这一页");}
$page = getPage($sum,$curr,$cut);
$sql = "select art_id,pubtime,title,catname,comm from art left join cat on art.cat_id=cat.cat_id order by art.art_id desc limit ".  ($curr-1)*$cut.",".$cut;
$arts = mGetAll($sql);
require(ROOT.'/view/admin/artlist.html');
?>
