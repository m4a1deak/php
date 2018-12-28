<?php
require('./lib/init.php');
if(!acc()){header("location:login.php");}
$sql = "select count(*) from comment";
$sum = mGetOne($sql);
$cut = 10;
$curr = isset($_GET['page']) ? $_GET['page'] : 1;
$page = getPage($sum,$curr,$cut);
$sql = "select comment.nick,comment.ip,comment.comment_id,comment.pubtime,art.title,comment.content from comment left join art on comment.art_id=art.art_id order by comment.comment_id desc limit ".($curr-1)*$cut.",".$cut;
$comms = mGetAll($sql);
print_r($comms);
require(ROOT . '/view/admin/commlist.html');
?>
