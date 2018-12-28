<html>
	<head>
		<meat http-equiv="content-type" content="text/html;charset=utf-8">
		<title>php获取服务器信息</title>
	</head>
	<body>
		<?php

echo"<h1>"."1.算术运算符"."</h1>";	
		// + — * / %
		// 除号和取余运算符的除数部分不能为0
		// 对于非数值类型的操作数，php会在算数运算时自动将非数值类型的操作数转换成一个数字
		
		//%求模运算符也称作取余运算符 php中在求模运算时首先会将%两边的操作数转换为整型，然后返回第一个操作数除以第二个操作数后所得到的余数。
		$a = 10%3;
		var_dump($a); // 1 

		$b = 10.9%3.3;
		var_dump($b); // 1 

		$c = "10ren"%"3ren";
		var_dump($c); // 1 

		$year = 2008;
		if($year%4 == 0 && $year%100 == 0 || ($year%400 == 0)){
			echo "$year 是闰年 <br>";
		}else{
			echo "$year 不是闰年 <br>";
		}
		
		//rand() 函数返回随机整数
		$num = rand()%10; //返回一个随机数 不超过10
		echo $num;

		$count = $conut + 1; //变量加1后在赋值给这个变量
		$count += 1;  //使用赋值运算符在原变量上加1
		++$count; //使用自增运算符直接加1

		// $a++ 采用后缀模式，先计算表达式的值，在执行递增的操作
		// ++$a 采用前缀模式，先执行递增运算，在计算表达式的值
		// $a-- 采用后缀模式，先计算表达式的值，在执行递减的操作
		// --$a 采用前缀模式，先执行递减运算，在计算表达式的值
		
		$a = 10;
		$b = $a++; //10
		
		$a = 10;
		$b = ++$a;  //11
		
		//前缀后缀区别
		$a = 10;
		$b = $a++ + ++$a;
		//$a++执行完后$a的值为11 ++$a后$a的值为12
		echo $a; //12
		echo $b; //22

		$b = $a-- - --$a;
		//$a--执行完后$a的值为11 --$a后$a的值为10
		echo $a; //10
		echo $b; //2

		//在处理字符变量的算数运算符时，PHP沿袭了Perl的习惯
		//Perl中 'Z'+1 得到'AA'
		//C中 'Z'+1 得到 '['   (ord('Z')==90,ord('[')==91) 
		//注意字符变量只能递增，不能递减，并且只支持纯字幕(a~zh和A~Z)
		
		$nn = 'x';
		echo ++$nn; //

		$i = 'a';
		for($n = 0;$n<52;$n++){
			echo ++$i ."\n";
		}
		//b c d e f g h i j k l m n o p q r s t u v w x y z aa ab ac ad ae af ag ah ai aj ak al am an ao ap aq ar as at au av aw ax ay az ba
		
		//递减/递增运算符并不影响布尔值/递减NULL值也没有效果，但是递增NULL的结果是1。
		?>
	</body>
</html>