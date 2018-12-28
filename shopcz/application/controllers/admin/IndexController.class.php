<?php
//后台首页控制器
class IndexController extends  BaseController{
    public function indexAction(){
        //echo 'admin....index...';
        //载入视图
        require(CUR_VIEW_PATH .'index.html');
    }
    public function topAction(){
        require(CUR_VIEW_PATH .'top.html');
    }
    public function menuAction(){
        require(CUR_VIEW_PATH .'menu.html');
    }
    public function dragAction(){
        require(CUR_VIEW_PATH .'drag.html');
    }
    public function mainAction(){
        //实例化admin模型
        $adminModel=new AdminModel('admin');//不带前缀的表名
        $admins=$adminModel->getAdmins();
        //var_dump($admins);
        //echo 111;
        require(CUR_VIEW_PATH .'main.html');
    }
    //生成验证码
    public function codeAction(){
        //引入验证码类
        $this->library('Captcha');
        //实例化对象
        $captcha=new Captcha();
        //调用方法生成验证码
        $captcha->generateCode();
        //http://localhost/shopcz/index.php?p=admin&c=index&a=code
}

}

?>
