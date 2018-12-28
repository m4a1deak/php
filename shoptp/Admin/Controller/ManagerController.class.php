<?php
namespace Admin\Controller;
use Think\Controller;
class ManagerController extends Controller{
    public function login(){
        if(IS_POST){
            $yzm = I('post.captcha');
            $very = new \Think\Verify();
           // if(!$very->check($yzm)){
           //     $this->error('验证码不对','login',1);
            //}
            $model = D('manager');//不存在就是实例化父类model
            /*$userpwd = array(
                'mg_name' => I('post.admin_user'),
                'mg_pwd' => I('post.admin_psd')
            );*/
            $mg_name=I('post.admin_user');
            $mg_pwd=I('post.admin_psd');
            //dump($userpwd);
            $info = $model->where("mg_name='{$mg_name}' and mg_pwd='{$mg_pwd}'")->find();
            // 　别忘记上边一行 要带单引号
            if($info){
                //存入session
                //持久化信息 以后要用到的 名字/id
                session('admin_id',$info['mg_id']);
                session('admin_name',$info['mg_name']);
                //dump($info);
                //dump($_SESSION);
                //echo 'aaa';
                $this->success('登陆成功',__MODULE__.'/index/index',1);
            }else{
                echo '用户名或密码不对';
            }
        }
        $this->display();
    }
    //退出系统
    public function logout(){
        session(null);
        $this->success('退出成功',__MODULE__.'/manager/login',1);
    }
    public function yzm(){
        $very = new \Think\Verify();
        $very->fontSize = 15; //大小
        $very->length = 4;   //位数
        $very->useNoise = false;  //关闭杂点
        //$very->useImgBg = true;  //随机背景图
        $very->useCurve = false;
        $very->imageW = 100;
        $very->imageH = 40;
        $very->entry();  //生成验证码

    }
}
