<?php
require('./lib/init.php');
//获取所有留言数
$sql = "select count(*) from comment";
$sum = mGetOne($sql);
//每页显示条数
$cut = 10;
//当前页码
$curr = isset($_GET['page']) ? $_GET['page'] : 1;
$page = getPage($sum,$curr,$cut);
//查询所有留言
$sql = "select comment.nick,comment.ip,comment.comment_id,comment.pubtime,art.title,comment.content from comment left join art on comment.art_id=art.art_id order by comment.comment_id desc limit ".($curr-1)*$cut.",".$cut;
$comms = mGetAll($sql);
print_r($comms);
require(ROOT . '/view/admin/commlist.html');

?>
