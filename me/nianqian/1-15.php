<html>
	<head>
		<meat http-equiv="content-type" content="text/html;charset=utf-8">
		<title>php获取服务器信息</title>
	</head>
	<body>
		<?php
echo"<h1>"."1.常量的定义和使用"."</h1>";
		//通过define()函数来定义常量
		//命名跟变量类似 大小写敏感 不用加$
		//常量定义函数  
		//boolean define(string name,mixed value[,bool case_insensitive])
		//第一个参数为字符串类型的常量名 name是名字
		//第二个参数为常量的值或是表达式 value是值
		//case_insensitive如果为TRUE 则常数将会定义成不区分大小写  预设是区分大小写的
		
		define("CON_INT",100); //声明一个名为CON_INT的常量 值为整形100
		echo CON_INT;  //100
		var_dump(CON_INT);

		define("FLO",99.99);//声明一个名为FLO的常量 值为读点书99.99
		echo FLO;  //99.99

		define("BOO",true);//声明一个名为BOO的常量 值为布尔型ture
		echo BOO;  //1

		//声明一个常量
		define("CONSTANT","Hello world.");
		echo CONSTANT; //Hello world.
		echo Constant; //输出字符串Constant和问题通知

		//不区分大小写
		define("GREETING","Hello you.",true);
		echo GREETING;  //Hello you.
		echo Greeting;  //Hello you.

		//使用define()函数 检查常量CONSTANT是否存在
		if(defined('CONSTANT')){
			echo CONSTANT;
		}
		//如果使用一个没有声明的常量，则变量名称会被解析为一个普通的字符串，但会比直接使用字符串慢8倍左右 所以在声明字符串时一定要加上单引号或双引号


echo"<h1>"."2.常量和变量"."</h1>";	
		//常量前面没有美元符号$
		//常量只能使用define()函数定义，而不能通过赋值语句定义
		//常量额可以不用理会变量范围的规则而在任何地方定义和访问
		//常量一旦定义就不能被重新定义或取消定义，知道脚本运行结束自动释放
		//常量的值只能是标量（boolean，integer，float和string这4中类型之一）。	
		

echo"<h1>"."3.系统中的预定义常量"."</h1>";	


echo"<h1>"."4.PHP中的魔术常量"."</h1>";	
		//php中有5个常量会根据它们使用的位置而改变
		//__FILE__       当前的文件名       在哪个文件中使用，就代表哪个文件名称
		//__LINE__       当前的行数         在哪代码的哪行使用，就代表哪行的行号
		//__FUNCTION__   当前的函数名       在哪个函数中使用，就代表哪个函数名
		//__CLASS__      当前的类名         在哪个类中使用，就代表哪个类的类名
		//__METHOD_    当前对象的方法名   在对象的哪个方法中使用，就代表这个方法名
		//两个下划线。。
		
		echo "当前操作系统是：".PHP_OS."<br>";
		echo "当前使用的PHP版本是：".PHP_VERSION."<br>";
		echo "当前的PHP文件名是：".__FILE__."<br>";
		echo "当前的行号是：".__LINE__."<br>";

echo"<h1>"."PHP中的运算符"."</h1>";	
		//运算符和变量是每种计算机语言中必须有的一部分
		//是一个命令解释器对一个或多个操作数(变量或者数值)执行某种运算的符号，也成操作符
		//根据操作数分为一元运算符，二元运算符，三元运算符。
		//根据功能分算数运算符，字符串运算符，赋值运算符，逻辑运算符，位运算符和其他运算符


echo"<h1>"."1.算术运算符"."</h1>";	
		// + — * / %
		// 除号和取余运算符的除数部分不能为0
		// 对于非数值类型的操作数，php会在算数运算时自动将非数值类型的操作数转换成一个数字








		?>
	</body>
</html>