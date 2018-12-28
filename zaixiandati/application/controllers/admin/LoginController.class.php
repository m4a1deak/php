<?php
//登录控制器
class LoginController extends Controller{
    //显示登录页面
    public function loginAction(){
        //ob_start();
        include CUR_VIEW_PATH.'login.html';
       // $cont = ob_get_contents();
        //file_put_contents('./login.html',$cont);
        //ob_end_clean();
    }
    //验证用户登录
    public function signinAction(){
        //手机用户名和密码
        $username=trim($_POST['username']);
        $password=trim($_POST['password']);
        //用户名转义
        $username=addslashes($username);
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

}