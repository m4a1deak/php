<?php
namespace Home\Controller;
use \Think\Controller;
class UserController extends Controller{
    public function login(){
        if(IS_POST) {
            $username = I('post.username');
            $pwd = I('post.password');
            $code = I('post.yzm');
            $Verify = new \Think\Verify();
           /* if(!$Verify->check($code)){
                $this->error('验证码错误','',2);
            }*/
            $userModel = D('user');
            $userinfo = $userModel->where(array('username'=>$username))->find();
            if (!$userinfo) {
                $this->error('用户名不正确', '', 3);
            }
            if($userinfo['password']!==md5($pwd.$userinfo['salt'])){
                $this->error('密码错误','',2);
            }else{
                cookie('userid',$userinfo['password']);
                cookie('username',$userinfo['username']);
                $coo_kie = jm($userinfo['username'].$userinfo['password'].C('COO_KIE'));
                cookie('key',$coo_kie);
                $this->success('登陆成功','/shop/index.php',2);
            }
        }
        $this->display();
    }
    public function yzm(){
        $Verify=new \Think\Verify();
        $Verify->fontSize=20;
        $Verify->length=4;
        $Verify->entry();
    }
    public function msg(){
        $this->display();
    }
    public function reg(){
        if(IS_POST){
            $userModel = D('User');
            if(!$userModel->create()){
                echo $userModel->getError();
                exit;
            }
            $s = $this->yan();
            $userModel->password=md5($userModel->password.$s);
            $userModel->salt=$s;
            $userModel->add();
        }
        //var_dump($_POST);
        $this->display();
    }
    public function logout(){
        cookie('username',null);
        cookie('userid',null);
        cookie('key',null);
        $this->success('退出成功');
    }
    public function yan(){
        $str = 'asd232asf[]as//xs,as235wsdqwef';
        return substr(str_shuffle($str),0,8);

    }
}

?>
