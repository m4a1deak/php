<?php
$str = 'good goooood  god  god  gooooooooood';

//$patt = '/\bgo+d\b/';
//preg_match_all($patt,$str,$a);
//var_dump($a);

/*$a =preg_replace($patt,'god',$str);
var_dump($a);*/

$patt='/\b\w{5,}\b/';
preg_match_all($patt,$str,$a);
var_dump($a);
?>
