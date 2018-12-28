<?php
namespace zhangsan;
include('26-1.php');
class shuai{
    public function __construct(){
        echo "我是张三";
    }
}
//频繁调用使用别名
use \lisi\shuai as a;
new a();
//直接加空间调用
//new \lisi\shuai();
?>
