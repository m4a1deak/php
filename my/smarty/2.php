<?php
require './smarty/Smarty.class.php';
$sm = new Smarty;
//$sm->template_dir = './dir';//设置模板路径
$sm->left_delimiter='<{';
$sm->right_delimiter='}>';
$d = '这个雨季啊还没到';
$arr = ['a'=>'小明','b'=>'大红'];
class human{
    public $name="张三";
}
class haha{
    public $hh="哈哈";
}
$h = new haha();
$sm->assign('h',$h);
$name = new human();
$sm->assign('tit',$name);
$sm->assign('d',$d);
$sm->assign('sss',$arr);
//$man = new human();
//$sm->assign('tit',$man);//tit不行
$sm->display('2.html');