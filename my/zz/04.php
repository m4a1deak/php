<?php
$str = 'baidu o2o p2p ger xiling 012ds shuai chou yanshiba';
//+ 多个不限
$patt ='/\b[a-zA-Z]{,6}\b/';
preg_match_all($patt,$str,$a);
var_dump($a);
?>
