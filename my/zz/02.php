<?php
$str= 'hi his is this sthi';
$patt = '/\bhi\b/';
preg_match_all($patt,$str,$a);
var_dump($a);
?>
