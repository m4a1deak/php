<?php
$str = "abc haha
abc dgh";
$patt = '/.+/s'; //看做一行
preg_match_all($patt,$str,$a);
var_dump($a);
?>
