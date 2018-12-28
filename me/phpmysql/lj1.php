<?php 

$conn = mysql_connect('localhost','root','12345678');
//var_dump($conn);
//resource(3) of type (mysql link)
//资源类型
mysql_query('use text',$conn);
mysql_query('set names utf8',$conn);

//$sql = 'select * from user';
//$res = mysql_query($sql);
//var_dump($res);
//resource(4) of type (mysql result)
//资源类型 资源标识符


//$sql = 'insert into user values(9,"yangyang",18)';
//$res = mysql_query($sql);
//var_dump($res);
//bool(true)

//$sql = 'delete from user where uid=9';
//$res = mysql_query($sql);
//var_dump($res);
//bool(true)


//$sql = 'update user set name="chaoren",age=77 where uid=2';
//$res = mysql_query($sql);
//var_dump($res);
//bool(true)

//$sql = 'select * from user';
//$res = mysql_query($sql);
//var_dump($res);
//resource(4) of type (mysql result)


//资源标识符 表示是资源 传送的是资源数据
//select 返回的是资源 因为他返回的是资源数据
//而update insert delete 则返回的是否成功 是布尔类型

//$sql = 'select * from user';
//$res = mysql_query($sql);
//print_r(mysql_fetch_assoc($res));
/*Array
(
    [uid] => 1
    [name] => zhangsan
    [age] => 23
)*/
//print_r(mysql_fetch_assoc($res));
/*Array
(
    [uid] => 2
    [name] => chaoren
    [age] => 77
)*/
//一次输出一行



//print_r(mysql_fetch_assoc($res));
/*Array
(
    [uid] => 1
    [name] => zhangsan
    [age] => 23
)
从结果集 中取得一行 作为 关联数组*/
//print_r(mysql_fetch_array($res));
/*Array
(
    [0] => 2
    [uid] => 2
    [1] => chaoren
    [name] => chaoren
    [2] => 77
    [age] => 77
)
从结果集 中取得一行 作为关联数组 或数字数组 或二者兼有*/
//print_r(mysql_fetch_row($res));
/*Array
(
    [0] => 3
    [1] => wangwu
    [2] => 25
)
从结果集 中取得一行 作为索引数组*/




//$sql = 'select * from user';
//$res = mysql_query($sql);
//print_r(mysql_fetch_assoc($res));
//此行代码按顺序输出时 当输出为空时 返回 false
//
//第100行执行一次 第101行执行一次 才开始打印
//while(mysql_fetch_assoc($res) != false){
//	print_r(mysql_fetch_assoc($res));
//	echo "<br>";
// }
/*Array
(
    [uid] => 2
    [name] => chaoren
    [age] => 77
)
<br>Array
(
    [uid] => 4
    [name] => zhaoliu
    [age] => 26
)*/


//$data = array();
//while(($row = mysql_fetch_assoc($res))!=false){
	  //print_r($row);
	//$data[] = $row;
 //}
 //print_r($data);
 //将row数组存于data数组中
/* Array
(
    [0] => Array
        (
            [uid] => 1
            [name] => zhangsan
            [age] => 23
        )

    [1] => Array
        (
            [uid] => 2
            [name] => chaoren
            [age] => 77
        )

    [2] => Array
        (
            [uid] => 3
            [name] => wangwu
            [age] => 25
        )

    [3] => Array
        (
            [uid] => 4
            [name] => zhaoliu
            [age] => 26
        )
)*/

//mysql_erroe返回上一个MySQL操作产生的文本错误信息



/*$sql = 'select * from user';
$res = mysql_query($sql);
if($res === false){
	echo mysql_error();
	exit();
}*/
//有错误时 输出错误 并结束程序的执行


//mysql_insert_id 取得上一步INERT操作产生的ID
/*$sql = 'insert into user values(7,"dahai",22)';
$res = mysql_query($sql);
if($rew === false){
	echo mysql_error();
	exit();
}
echo mysql_insert_id();*/
//7

/*$sql = 'insert into user values(16,"xxx",12),(9,"xxx",12),(8,"xxx",12)';
$res = mysql_query($sql);
if($res === false){
	echo mysql_error();
	exit();
}

echo mysql_affected_rows();*/
//3行收到改动


$close = mysql_close($conn);
//var_dump($close);//ture
var_dump($conn);
//Unknown未知






 ?>
