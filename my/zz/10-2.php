<?php
$str = '13800138000 , 13426060134 13800138000,备用电话18902587413';
$patt = '/\b(\d{3})(\d{4})(\d{4})\b/';
$a =preg_replace($patt,'\1****\3',$str);
var_dump($a);

?>