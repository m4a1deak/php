<?php
//将1234567890转换成1,234,567,890 每3位用逗号隔开的形式。
$str = "1234567890";
$str = number_format($str);
echo $str;
// number_format() 以千位分隔符格式化一个数字
?>
