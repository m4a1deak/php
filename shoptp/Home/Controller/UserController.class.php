<?php
namespace Home\Controller;
use Think\Controller;
//用户控制权
class UserController extends Controller{
    //登录
    public function login(){
        $this->display();
    }
    public function register(){
        $userModel = D('User');
        if(IS_POST){
            //$_POST['user_hobby'] = implode(',',$_POST['user_hobby']);
            /*if($userModel->add($_POST)){
                echo '123';
            }*/

            $data = $userModel->create();
            if($data){
                //dump($_POST);
                //dump($userModel->getError());
                //exit;
                $data['user_hobby'] = implode(',',$data['user_hobby']);
                if($userModel->add($data)){
                    $this->success('注册成功',__MODULE__.'/index/index',1);
                }
            }else{

                $this->assign('errorinfo',$userModel->getError());
            }

            /*if(!$userModel->create()){
                dump($userModel->getError());
                exit;
            }
            dump($userModel->create());*/

        }
        $this->display();
    }
}
