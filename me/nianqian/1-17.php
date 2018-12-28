<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
echo "<h1>2.字符串运算符</h1>";
	//PHP中字符串运算符只有一个，就是英文的句号 (.) 也称作连接运算符。它是一个二元运算符，返回其左右参数连接后的字符串。
	//这个运算符不仅可以将两个字符串连接起来，合并成新字符串；也可以将一个字符串和任何标量数据类型相连，合并成的都是新的字符串
	
	$name = "Tom";
	$age = 27;
	$height = 1.71;
	echo "我的名字是：".$name.",我的年龄是：".$age.",我的身高；".$height."米"."<br/>";
	echo "我的名字是：$name,我的年龄是；$age,我的身高：$height米<br/>";
	?>
</body>
</html>