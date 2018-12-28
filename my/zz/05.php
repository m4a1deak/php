<?php
$str = 'wd     dd     dsd    dfgdfgdfgdfgdffgfg werwedfgdfg   sddf  wdfgertdf sdfsdfs
 sadad';
$patt = '/\W{1,}/';
preg_match_all($patt,$str,$a);
var_dump($a);
?>
