<?php
require('./lib/init.php');
$sql = "select * from cat";
$cats = mGetAll($sql);
$cat_id = $_GET['cat_id'];
if(isset($_GET['cat_id'])){$where = " and art.cat_id=$cat_id";}else{$where = '';}
$sql = "select count(*) from art where 1".$where;
$num = mGetOne($sql);
if($num == 0){header("location:index.php");}
$curr = isset($_GET['page']) ? $_GET['page'] : 1;
$cut=5;
$page = getPage($num,$curr,$cut);
$sql = "select cat.cat_id,art_id,catname,thumb,title,content,pubtime,comm from art left join cat on art.cat_id=cat.cat_id where 1" .$where ." order by art.art_id desc limit ".($curr-1)*$cut.",".$cut;
$arts = mGetAll($sql);
//print_r($arts);
require(ROOT . '/view/front/index.html');
?>
