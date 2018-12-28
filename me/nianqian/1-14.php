<html>
	<head>
		<meat http-equiv="content-type" content="text/html;charset=utf-8">
		<title>php获取服务器信息</title>
	</head>
	<body>
		<?php
echo"<h1>"."8.NULL类型"."</h1>";
		//特殊的NULL值表示一个变量没有值  NULL类型唯一可能的值就是NULL
		//NULL不表示空格，也不表示零，也不是空字符串，而是表示一个变量的值为空
		//NULL不区分大小写
		//1，将变量直接赋值为NULL    2，生命的变量尚未被赋值   3，被unset()函数销毁的变量
		
		$a = NULL;
		$b = "value";

		unset($b);

		var_dump($a);  //变量直接赋值NULL 输出NULL
		var_dump($b);  //被unset()函数销毁的变量 输出NULL
		var_dump($c);  //声明的变量尚未赋值 输出NULL


echo"<h1>"."9.伪类型"."</h1>";
		//并不是PHP语言中的基本数据类型
		//mixed  说明一个参数可以接受多种不同（但并不必须是所有的）类型。gettype()可以接受所有的PHP类型，str_replace()可以接受字符串和数组。
		//number  说明一个参数可以是integer或者float
		//callback  ？？

echo"<h1>"."数据类型之间互相转换"."</h1>";
echo"<h1>"."1.自动类型转换"."</h1>";
		//通常只有4种标量才能使用自动类型转换 integer float string boolean 
		//注意：这并没有改变这些运算数本身的类型，改变的仅是这些运算数如何被求值。
		//自动类型转换虽然是系统自动完成的 ，但在混合运算时，自动转换要遵循转换按数据长度增加的方向进行 以保持精度不降低。
		//1，有布尔值参与运算时，TRUE将转换成整型1，FALSE将转化成整型0后在参与运算。
		//2，有NULL值参与运算时，NULL值将先转换为整型0再参与运算。
		//3，有integer型和float型的值参与运算时，先把integer型转换成float类型后在参与运算
		//4，有字符串和数值型（integer，float）数据参与运算时，字符串将先转换为数字，在参与运算。转换后的数字是从字符串开始的数值型字符串，如果在字符串开始的数值型字符串不带小数点，则转换为intege类型的数字，如果带小数点则转换为float类型的数字。                        例如，"123abc"转换为整数123，     "123.45abc"则转换为浮点数123.45       "abc"转换为整数0
		
		$foo = "100page";  //声明为一个字符串
		$foo += 2;  //现在是一个整型 102
		$foo = $foo + 1.3; //现在是一个浮点数 103.3
		$foo = null + "10 Little Piggies"; //现在是一个 整数 10
		$foo = 5 + "10.05 yuan"; //现在是一个浮点数  15.05
echo"<h1>"."2.强制类型转换"."</h1>";

		//可以在要转换的变量之前加上用括号括起来的目标类型
		$foo = 10;             //整型
		$bar = (boolean)$foo;  //布尔型
		//上例哭号中允许有空格和制表符
		//(int),(integer)：转换成整形
		//(bool),(boolean)：转换成布尔型
		//(float),(double),(real)：转换成浮点型
		//(string)：转换成字符串
		//(array)：转换成数组
		//(object)：转换成对象


		//也可以使用具体的转换函数，即intval(),floatval()和strval()等，或是使用settype()函数转换类型。
		//intval() 获取变量的整数值
		//floatval() 获取变量的浮点值
		//strval() 获取变量的字符串值
		$str = "123.45ab";
		$int = intval($str); //123
		var_dump($str);//string
		$flo = floatval($str);  //123.45
		$str = strval(123.45); //"123.45"
		//以上两种类型的强制转换都没有改变这些被转换变量本身的类型，而是通过转换将得到的新类型的数据赋给了新的变量，原变量的类型和值不变。
		//如果需要将变量本身的类型转换成其他类型，可以使用settype()函数来设置变量的类型
		$foo = "5bar";
		$bar = true;

		settype($foo, "integer");
		var_dump($foo);   //5(integer)
		settype($bar, "string");
		var_dump($bar);  //"1"(string)
		//注意：自PHP5起，如果试图将对象转换为浮点数，会发出一条E_NOTICE错误。
	
echo"<h1>"."3.类型转换细节"."</h1>";
         echo "整数转换为浮点数，由于浮点数的精度范围远大于整数，所以转换后的精度不会改变。
              浮点数转换为整数，将自动舍弃小数部分，只保留整数部分。
              如果一个浮点数超过整型数字的有效范围，其结果将是不正确的。整型的最大值约为2.147e9.
              当字符串转换为数字时，转换后的数字是从字符串开始部分的数值型字符串，数值型字符串包括用科学计数法表示的数字
              NULL值转换为字符串，为空字符串\"\" " ;
 

echo"<h1>"."4.变量类型的测试函数"."</h1>";
		//使用函数var_dump()来查看某个表达式的值和类型
		//如果想得到一个容易读懂的类型的表达方式用于调试，也可以用gettype()函数，但必须先给这个函数传递一个变量，它将确定变量的类型并返回一个包含名称的字符串.                                   如果不是8中标准类型之一，该函数会返回"unknown type"。
		//但要查看某个类型 不要使用gettype()函数 而要使用is_type()函数 它是PHP提供的一些特定类型的测试函数之一。每个函数都使用一个变量作为其参数，并返回true和false。
		//is_bool()；判断是否是布尔型。
		//is_int(),is_integer(),is_long()；判断是否是整形。
		//is_float(),is_double(),is_real()；判断是否是浮点数。
		//is_string()；判断是否是字符串。
		//is_array()；判断是否是数组。
		//is_object()；判断是否是对象。
		//is_resource()；判断是否是资源类型。
		//is_null()；判断是否为空。
		//is_scalar()；判断是否是标量。（整数，浮点数，布尔型或字符串）
		//is_numeriv()；判断是否是任何类型的数字或数字字符串。
		//is_callable()；判断是否是有效的函数名。
		
		$bool = TRUE;
		$str = "foo";
		$int = 12;

		echo gettype($bool); //boolean
		echo gettype($str);  //string
		var_dump($str);    //string(3)

		if(is_int($int)){
			$int += 4;
			echo "Integer $int";
		}//16

		if(is_string($bool)){
			echo "String $bool";
		}//不会输出

		if(is_bool($bool)){
			echo "boolean:$bool";
		}//1

		?>
	</body>
</html>