<?php
$str = 'hello WORLD, ChINa';
$patt = '/\b[a-z]+\b/i';//i 不区分大小小
preg_match_all($patt,$str,$a);
var_dump($a);

?>
