<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //展现模板
        //display()是父类Controller的操作方法
        //1 没有参数 模板与当前操作方法名一致
        $this->display();
        //2  有参数
        //$this->display('test');
        //3 调用其它控制器下的模板
        //$this->display('Goods/showlist');
    }
}