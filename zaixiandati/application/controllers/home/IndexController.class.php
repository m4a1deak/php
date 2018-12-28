<?php
//前台首页控制器啊
class IndexController extends Controller{
    //显示首页
    public function indexAction(){
        require(CUR_VIEW_PATH .'login.html');
    }
    public function signinAction(){
        //手机用户名和密码
        $username=trim($_POST['username']);
        $userpwd=trim($_POST['password']);
        //用户名转义
        $username=addslashes($username);
        $password=addslashes($userpwd);
        //验证和处理
        if(empty($username)){
            $this->jump('index.php?p=home&c=index&a=index','考生用户名不能为空',1);
        }else if(empty($password)){
            $this->jump('index.php?p=home&c=index&a=idnex','密码不能为空',1);
        }
        //调用模型完成用户的检查并调整相应页面
        $adminModel=new AdminModel('user');
        $user = $adminModel->checkUser1($username,$password);
        //var_dump($user);
        if(!empty($user)){
            //登录成功 保存session
            $_SESSION['aaa']=$user;
            echo '考生登录成功';
            $this->jump('index.php?p=home&c=index&a=ceshi','',0);
        }else{
            //失败
            $this->jump('index.php?p=home&c=index&a=index','用户名密码错误',1);
        }
    }
    public function ceshiAction(){
        if(isset($_SESSION['aaa'])){
            //var_dump($_SESSION['aaa']['user_name']);
            $li = new CategoryModel('ti');
            $list = $li->getTi();
            //print_r($list);
            $i = array_rand($list,10);
            //print_r($i);
            //Array ( [0] => 0 [1] => 4 [2] => 9 [3] => 12 [4] => 21 [5] => 26 [6] => 27 [7] => 29 [8] => 33 [9] => 36 )
            for($x=0;$x<10;$x++){
                $a[$x] = $list[$i[$x]];
                $a[$x]['ti_daan']=explode(',',$a[$x]['ti_daan']);
            }//随机取出10个数组
            //print_r($a);
            $_SESSION['xxx']=$a;
            require(CUR_VIEW_PATH .'ceshi.html');
        }

    }
    public function fenshuAction() {
        //print_r($_POST);
        //echo "<br>";
        //print_r($_SESSION['xxx']);
        //echo "<br>";
        foreach($_SESSION['xxx'] as $k=>$v){
            static $sum = 0;
            if($v['zhendaan'] == $_POST[$v['ti_id']]){
                $sum = $sum+10;
            }else{
                echo "第".($k+1)."道题错了<br>";
            }
        }
        $x = new UserModel('user');
        $xx = $x->xxx($sum,$_SESSION['aaa']['user_name']);
        if($xx){echo "本次测评总分是".$sum."分";}





    }
}