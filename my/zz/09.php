<?php
$str = '王先生,卖洗衣机 联系13800138000,备用电话18902587413,QQ:258963,email:wang@qq.com,诚心卖,身份证号:101341197912123039';
$patt = '/\b1[3587]\d{9}\b/';
preg_match_all($patt,$str,$a);
var_dump($a);
?>
