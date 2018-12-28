<?php
//基础配置文件

//echo __DIR__ ;//当前文件目录名
//D:\AppServ\www\blog1\lib

// __FILE__ 当前文件目录名 饱含文件名
// __LINE__ 当前这个魔术常量所处行数

//设置文件字符集
header('Content-type/text/html;charser=utf8');

//dirname() 返回上一级目录名
//dirname(__DIR__)
//D:\AppServ\www\blog1

//设置常量 ROOT  绝对路径D:\AppServ\www\blog1
define('ROOT',dirname(__DIR__));

require(ROOT . '/lib/mysql.php');
require(ROOT . '/lib/func.php');

//addslashes() 函数返回在预定义字符之前添加反斜杠的字符串
//调用_addslashes() 利用递归
$_GET = _addslashes($_GET);
$_POST = _addslashes($_POST);
$_COOKIE = _addslashes($_COOKIE);
?>
