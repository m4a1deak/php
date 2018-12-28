<?php
class UserController extends Controller{
    public function rmgindexAction(){
        require(CUR_VIEW_PATH .'rmg.html');
    }
    public function rmgAction(){
        if(empty($_POST['username'])){
            echo "考生号不能为空";
            exit;
        }
        if(empty($_POST['password'])){
            echo "密码不能为空";
            exit;
        }
        if($_POST['password'] != $_POST['password2']){
            echo "两次密码不一样";
            exit;
        }
        $x = new UserModel('user');
        $xx = $x->add($_POST['username'],$_POST['password']);
        if($xx){
            echo '注册成功';
        }else{
            echo '注册失败';
        }
    }
}

?>
