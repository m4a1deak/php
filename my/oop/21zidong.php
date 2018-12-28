<?php
function myload($lass){
    include './' .$lass .'.class.php';
}
//注册 一个函数 为自动触发函数
spl_autoload_register('myload');//new 不存在的类 过来找我
new Mysql();
?>
