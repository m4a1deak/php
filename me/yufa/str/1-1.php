<?php
//01,将1234567890转换成1,234,567,890 每3位用逗号隔开的形式。
$str = "1234567890";
//1
$str1 = strrev($str);
//echo $str1; //0987654321
$arr = str_split($str1,3);
//print_r($arr);
$str1 = implode(',',$arr);
//echo $str1;
$str1 = strrev($str1);
echo $str1;
// strrev()翻转字符串
// str_split()将字符串转化为数组 参数为每段的长度
?>
