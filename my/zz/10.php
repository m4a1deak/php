<?php
$str = 'txt hello, high, bom , mum';
$patt='/\b([a-z])\w+\1\b/';
preg_match_all($patt,$str,$a);
var_dump($a);

?>
