<html>
	<head>
		<meat http-equiv="content-type" content="text/html;charset=utf-8">
		<title>php获取服务器信息</title>
	</head>
	<body>
		<?php
		echo "你好";
		echo"<h1>"."引用赋值"."</h1>";
		$foo = 'Bob'; 
		$bar = &$foo;

		$bar = "my name is tom";
		echo $foo;
		echo $bar; //输出一样

		echo "<br>";

		$foo = "your name is lala";
		echo $foo;
		echo $bar;  //输出一样
		//不是将foo的值付给bar 而是将foo的引用赋值给了bar 这时 bar相当于foo的别名 
		//只要其中任何一个变量有所改变 都会影响另一个变量
		//只有有名字的变量才可以引用赋值

		//   
		//   $f1 = 25;
		//   $f2 = &$f1;
		//   $f2 = &(24*7); //此引用赋值无效 不能将表达式作为引用赋值
		//   
		//   function text(){
		//   	return 25;
		//   }
		//   $f2 = &text(); //此引用赋值无效 不能是没有名字的变量
		echo "<br>";
		$f1 = 25;
		$x1 = &$f1;

		unset($x1); //会让两个变量都消失吗
		echo $f1;  //25
		//执行unset()后 变量f1和x1仅仅是互相取消关联 f1并没有因为x1的释放而消失
		//
		//
		echo"<h1>"."变量的类型"."</h1>";
		//四种标量类型 boolean布尔型 integer整型 float浮点型 string字符串型 
		//两种复合类型 array数组 object对象
		//两种特殊类型 resource资源 NULL 
		

		//查看某个表达式的值和类型  var_dump()
		
		$bool = TRUE;
		$str = "foo";
		$int = 12;

		var_dump($bool);
		var_dump($str);
		var_dump($int);

		echo"<h1>"."1.布尔型"."</h1>";
		//FALSE 整型0 浮点型0.0 空白字符串 字符串0 没有成员变量的数组 没有单元的对象（PHP4） NULL
		//全为FALES
		var_dump((bool) ""); //bool(false)
		var_dump((bool) 1); //bool(true)
		var_dump((bool) -2); //bool(true)
		var_dump((bool) "foo"); //bool(true)
		var_dump((bool) 2.3e5); //bool(true)
		var_dump((bool) array(12)); //bool(true)
		var_dump((bool) array()); //bool(false)
		var_dump((bool) "false"); //bool(true)



		echo"<h1>"."2.整型"."</h1>";
		$int = 1234; //十进制数  
		$int = -123; //负数
		$int = 0123; //八进制
		$int = 0x1A; //十六进制数



		echo"<h1>"."3.浮点型(flaot或double)"."</h1>";
		$float = 1.234;//正常浮点数 
		$float = 1.2e3;//科学记数法表示的浮点数 1.2*10的3次方
		$flaot = 7E-10;//科学记数法表示的浮点数 7*10的-10次方

		//浮点数只是一种近似的数值
		//如果用浮点数表示8 则内部的表示其实类似7.99999999999999~~~~
		//永远不要相信浮点数结果精确到了最后一位 也永远不要比较两个浮点数是否相等
		//需要高精度使用gmp()函数


		echo"<h1>"."4.字符串"."</h1>";
		//单引号
		//单引号引起的字符串中不能再包含单引号
		//如果在单引号中表示一个单引号，则需反斜线（\）转义
		//如果试图转义其他字符 反斜线本身也会显示出来 所以在单引号中可以使用转义字符反斜线。但只能转义在单引号中引起来的单引号和转移字符本身
		
		//正常使用
		echo 'this is a simple string';

		//转义字符 转义
		echo 'this is a \'simple\' string';

		//只能在最后的反斜杠转义输出一个反斜杠 其他的转义都是无效的 会原样输出
		echo 'this \n is \r a \t simple string\\';

		$str1 = 100; //定义整型变量str1
		//会将变量名原样输出 并不会在单引号中解析这个变量
		echo 'this is a simple $str1 string';


		//双引号

		?>
	</body>
</html>