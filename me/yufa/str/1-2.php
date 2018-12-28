<?php
//将1234567890转换成1,234,567,890 每3位用逗号隔开的形式。
$str = 1234567890;
$str = strrev($str);
//echo $str;
$str = chunk_split($str,3,',');
//echo $str; //098,765,432,1,
$str = strrev($str);
//echo $str;//,1,234,567,890
$str = ltrim($str,',');
echo $str;
// strrev() 反转字符串
// chunk_split() 将字符块分割成小块 分割尺寸 行尾符号 不够也加上
// ltrim() 删除字符串开头的字符
?>
