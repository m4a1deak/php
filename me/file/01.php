<?php
//print_r($_FILES);
/*
 * [name] => Array
        (
            [name] => psb.jpg
            [type] => image/jpeg
            [tmp_name] => C:\Windows\Temp\php3E48.tmp
            [error] => 0
            [size] => 117183
        )
 * */
//随机文件名
$fname = rand(10000,99999);
//获取文件后缀
$ext = strrchr($_FILES['name']['name'],'.');//.jpg
//创建目录
$path = './'.date('Y/m/d');
if(!is_dir($path)){
    mkdir($path,0777,true);
}

echo move_uploaded_file($_FILES['name']['tmp_name'],$path.'/'.$fname.$ext)? "ok" : "失败";
//需要移动的文件 移动到哪里叫啥名
?>
