<html>
	<head>
		<meat http-equiv="content-type" content="text/html;charset=utf-8">
		<title>php获取时间</title>
	</head>
	<body>
		<?php
	
			echo "服务器时间".date("Y-m-d H:i:s");

			/*
			

			多行注释



			 */
			//单行注释
			
			

			#注释
		?>


	<?php
		echo "1.这个是标准的PHP语言标记";
	?>
	
	<script language="php">
		echo "2.这个是脚本风格，是最长的标记";
	</script>

	<? 
		echo "3.简短风格，需要打开";
	?>

	<?=$expression ?>
	<% echo "4.asp格式" %>

	<%=$espression %>



	<?php
		/**
		 *
		 *
		 *
		 *
		 *
		 *
		 * 文档注释
		 */
	?>
<h1>变量</h1>

	<?php
		$a = 100;	//整数型
		$b = "string"; //字符串型
		$c = true; //布尔型
		$d = 99.99; //浮点型
		$key1 = $a; //将变量$a的值付给新变量
		$key2 = $b;
		$a = $b = $c = $d = "value";

	?>
	
<h1>作用域</h1>
	
	<?php
		$var = "";
		if(empty($var)){
			echo "$var is 0 or not set at all"; //真  为空
		}
		if(!isset($var)){
			echo "$var is not set at all"; // 假 已设置
		}
		unset($var); // 销毁单个变量 在内存中释放
		if(isset($var)){
			echo "this var is set so i will print"; //假 已销毁
		}
		//empty() 若参数  非空或非零 返回 False
		//unset() 释放变量
		//isset() 参数存在 返回 True
	?>
		

<h1>命名规范</h1>
	<?php
		$name = "abc";
		$Name = "Abc";
		$NAME = "ABC";
		echo $name;
		echo $Name;
		echo $NAME;

	?>
<h1>可变变量</h1>
	<?php
		$hi = "hello"; //声明一个普通变量$hi 值为hello
		$$hi = "world";//声明一个可变变量$$hi 值为world       相当于声明$hello的值为world

		echo "$hi $hello"; //hello world
		echo "$hi ${$hi}";//hello world    $hello和$hi是等价的
	?>
	</body>
</html>