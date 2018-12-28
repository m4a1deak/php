<html>
	<head>
		<meat http-equiv="content-type" content="text/html;charset=utf-8">
		<title>php获取服务器信息</title>
	</head>
	<body>
		<?php
		
		echo"<h1>"."3.字符串"."</h1>";
		//双引号
		//双引号中的变量名会被变量值代替 变量会被解析
		//如果想明示指定的名字 可用花括号括起来
		$beer = 'Heineken';

		//正常解析 （'）在变量名中是无效的
		echo "$beer's taste is great";

		//不能解析 s在变量名中是有效的 但没有$beers变量
	//echo "He drank some $beers";

		//将变量分离出来解析
		echo "He drank some ${beer}s";

		//花括号的另一种用法
		echo "He drank some {$beer}s";



		//定界符 <<<
		//在<<<之后提供一个标识符开始，然后是包含的字符串，最后是相同的标识符结束字符串
		//结束字符串必须从行的第一列开始，并且后面除了分号不能包含其他任何的字符;空格及空白制表符都不可以
		//遵循PHP的其他标签的命名规则 只能包含字母 数字 下划线
		
				//以标识符EOT开始和标识符EOT结束定义的一个字符串，当然可以使用其他合法的标识符
		$string=<<<EOT
			这里是包含在定界符中的字符串，指出了定界符的一些使用时注意的事项。
			很重要的一点必须指出，结束标识符EOT所在的行不能包含其他任何字符。这意味着该标识符不能被缩进，而且在结束标记的分号之前和之后都不能有任何空格或制表符。
			同样重要的是，要意识到在结束标识符之前的第一个字符必须是你的操作系统中定义的换行符。
			如果破坏了这条规则使得标识符不“干净”，则它不会被视为结束标识符，PHP将继续寻找下去。
			如果在这种情况下找不到合适的结束标识符，将会导致一个在脚本最后一行出现的语法错误。
EOT;
		echo $string;  //输出上面使用定界符定义的字符串


		//定界符文本除了不能初始化类成员 表现的跟双引号字符串一样 意味着在定界符文本中不需要转义引号
		//不过仍然可以使用双引号中的转义符号 而且定界符中的变量也会被解析


		$name = "Myname";
		//以下代码是直接输出定界符中的字符串
		/*在定界符中可以使用 任意的转义字符 直接使用双引号 以及解析其中的变量*/
		echo <<<EOT
		my name is $name. i am printing a "string" \n.
		\tNow,i am pringting a some new line \n\r.
		\tThis should print a capital 'A'
EOT;

		/*
		以下是一个非法例子 不能使用定界符初始化类成员
		
		class foo {
			public $bar = <<<EOT
				bar
EOT
		}

		 */


echo"<h1>"."5.数组"."</h1>";
		//array()语言结构来新建一个array 它接受一定数量的用逗号分隔的 key => value 参数对
		/*
			array(
				key1 => value1;
				key2 => value2;
				......
			)
			key可以是整型或者字符串
			value可以是任何值
		 */


		$arr = array("foo" => "bar",12 => true);
		print_r($arr); //使用print_r()函数查看数组中的全部内容
		echo $arr["foo"]; //通过数组下标访问数组中的单个数据 bar
		echo $arr[12]; //通过数组下标访问数组中的单个数据 1


		
echo"<h1>"."6.对象"."</h1>";
		//一个对象类型的变量 由一组属性值和一组方法构成
		//属性表明对象的一种形态
		//方法通常用来表明对象的功能
		//初始化一个对象 用new语句将对象实例化到一个变量中
		
	//      	class Person{           	//使用class关键字定义一个类Person
	//      		var $name;             //在类中定义一个成员属性name
	//      		function say(){    	   //在类中定义一个成员方法
	//      			echo "Doing foo";  //在成员方法中输出一条语句
	//      		}
	//      	}
	//      	$p = new Person;  //使用new语句实例化类Person的对象放在变量$p中
	//      	$p->name = "Tom"; //通过对象$p访问对象中的成员属性$name
	//      	$p->sat();        //通过对象$p访问对象中的成员方法


echo"<h1>"."7.资源类型"."</h1>";
	//使用相应函数创建不同的资源变量 成功则返回资源引用赋给变量 失败则返回布尔型false

	//使用fopen()函数以写的方式打开本目录下的info.txt文件 返回文件资源
	$file_handle = fopen("info.txt", "w");
	var_dump($file_handle);  //resource(3) of type (stream)

	//使用opendir()函数打开Windows系统下的c:\\WINDOWS\\Fonts目录 返回目录资源
	$dir_handle = opendir("c:\\WINDOWS\\Fonts");
	var_dump($dir_handle);   //resource(4) of type (stream)

	//使用mysql_connect()函数连接本机中的MySql管理系统 返回连接资源
	$link_mysql = mysql_connect("localhost","root","12345678");
	var_dump($link_mysql);   //resource(6) of type (mysql link)

	//使用imagecreate()函数创建一个100*50像素的画板 返回图像资源
	$im_handle = imagecreate(100,50);
	var_dump($im_handle);    //resource(7) of type (gd)

	//使用xml_parser_create()函数返回 xml解析器资源
	$xml_parser = xml_parser_create();
	var_dump($xml_parser);    //resource(8) of type (xml)


	//用户虽然无法获知某个资源的细节 但某些函数必须引用相应的资源才能工作
	//如果需要获取MySql数据库管理系统的信息，选择数据库，以及执行SQL语句等操作 所使用的函数必须都对此资源进行性引用






		?>
	</body>
</html>