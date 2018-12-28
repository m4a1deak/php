<?php
$str = 'ksda good gooooood  good kl s js dsf dk';
/*$patt = '/\bg.+d\b/';
preg_match_all($patt,$str,$a);//good gooooood good
var_dump($a);*/

/*$patt = '/g.+d/';
preg_match_all($patt,$str,$a);//good gooooood good kl s js dsf d
var_dump($a);*/

$patt = '/g.+?d/';
preg_match_all($patt,$str,$a);
var_dump($a);
?>
