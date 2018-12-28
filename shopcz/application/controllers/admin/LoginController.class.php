<?php
//登录控制器
class LoginController extends Controller{
    //显示登录页面
    public function loginAction(){
        include CUR_VIEW_PATH.'login.html';
    }
    //验证用户登录
    public function signinAction(){
        //手机用户名和密码
        $username=trim($_POST['username']);
        $password=trim($_POST['password']);
        //用户名转义
        $username=addslashes($username);
        //检查验证码
        $captcha=trim($_POST['captcha']);
        if(strtolower($captcha)!=$_SESSION['captcha']){
            $this->jump('index.php?p=admin&c=login&a=login','验证码不正确',1);
        }
        //验证和处理
        if(empty($username)){
            $this->jump('index.php?p=admin&c=login&a=login','用户名不能为空',1);
        }else if(empty($password)){
            $this->jump('index.php?p=admin&c=login&a=login','密码不能为空',1);
        }
        //调用模型完成用户的检查并调整相应页面
        $adminModel=new AdminModel('admin');
        $user = $adminModel->checkUser($username,$password);
        //var_dump($user);
        if(!empty($user)){
            //登录成功 保存session
            $_SESSION['admin']=$user;
            $this->jump('index.php?p=admin&c=index&a=index','',0);
        }else{
            //失败
            $this->jump('index.php?p=admin&c=login&a=login','用户名密码错误',3);
        }
    }
    //退出
    public function logoutAction(){
        unset($_SESSION['admin']);
        session_destroy();
        $this->jump('index.php?p=admin&c=login&a=login','',0);
    }
    //生成验证码
    public function captchaAction(){
        //载入验证码类
        $this->library('Captcha');
        //实例化对象
        $captcha=new Captcha();
        //调用方法生成验证码
        $captcha->generateCode();
        //将验证码保存到session中
        $_SESSION['captcha']=$captcha->getCode();
    }
}