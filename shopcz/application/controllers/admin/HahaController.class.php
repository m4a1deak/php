<?php
class HahaController extends Controller{
    public function ShowAction(){
            session_start();
            //echo "存的是".$_SESSION['captcha'];
            if($_POST['yzm'] == $_SESSION['captcha']){
                echo 1;
            } else{
                echo 0;
            }
        //echo "输入的是".$_POST['yzm'];
        //不能导入 否则ajax返回的是整个页面信息
        //require(CUR_VIEW_PATH .'haha.html');
    }
    public function CodeAction(){
        //引入验证码类
        $this->library('Captcha');
        //实例化对象
        $captcha=new Captcha();
        //调用方法生成验证码
        $captcha->generateCode();
        session_start();
        $_SESSION['captcha'] = $captcha->getCode();
        //http://localhost/shopcz/index.php?p=admin&c=index&a=code
    }
}

?>
