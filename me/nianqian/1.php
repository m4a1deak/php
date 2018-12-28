<html>
	<head>
		<meat http-equiv="content-type" content="text/html;charset=utf-8">
		<title>php获取服务器信息</title>
	</head>
	<body>
		<?php
		$sysos = $_SERVER["SERVER_SOFTWARE"];//获取服务器标识的字符串
		$sysversion = PHP_VERSIONl;			//获取php服务器版本

		//一下两条代码链接MySql数据库并获取MySql数据库版本信息
		mysql_connect("localhost","root","guanhui1995");
		$mysqlinfo = mysql_get_server_info();

		//从服务器获取GD库的信息
		if(function_exists("gd_info")){
			$gd = gd_info();
			$gdinfo = $gd['GD Version'];

		}else{
			$gdinfo="未知";
		}

		$freetype=$gd["FreeType Support"] ? "支持":"不支持";

		$allowurl=ini_get("allow_url_fopen")? "支持":"不支持";

		$max_upload=ini_get("file_uploads")?ini_get("upload_nax_filesize"):"Disabled";

		$max_ex_time=ini_get("max_excytion_time")."秒";

		date_default_timezone_set("Etc/GMT-8");
		$systemtime=date("Y-m-d H:i:s",time());

		echo "<table align=center cellspacing=0 cellpadding=0>";
		echo "<caption><h2>系统信息</h2></caption>";
		echo "<tr> <td> web服务器</td> <td> $sysos </td> </tr>";
		echo "<tr> <td> php版本</td> <td> $sysversion </td> </tr>";
		echo "<tr> <td> mysql版本</td> <td> $mysqlinfo </td> </tr>";
		echo "<tr> <td> gd库版本</td> <td>$gdinfo </td> </tr>";
		echo "<tr> <td> FreeType</td> <td> $freetype </td> </tr>";
		echo "<tr> <td> 远程文件获取</td> <td>$allowurl </td> </tr>";
		echo "<tr> <td> 最大上传限制</td> <td>$max_upload </td> </tr>";
		echo "<tr> <td> 最大执行时间</td> <td> $max_ex_time </td> </tr>";
		echo "<tr> <td> 服务器时间</td> <td> $systemtime </td> </tr>";
		echo "</table>"


		?>
	</body>
</html>