<?php
require('./lib/init.php');
if(empty($_POST)){
    require(ROOT .' /view/front/login.html');
}else{
    $user['name'] = trim($_POST['name']);
    $user['password'] =trim($_POST['password']);
    if(empty($user['name'])){
        echo "用户名不能为空";
        exit();
    }else if(empty($user['password'])){
        echo "密码不能为空";
        exit();
    }

    $sql = "select * from user where name='{$user[name]}'";
    $res = mGetRow($sql);
    if(!$res){
        echo "用户名不正确";
    }else{
        if(md5($user['password'].$res['salt']) === $res['password']){
            setcookie('name',$user['name']);
            setcookie('ccode',cCode($user['name']));
            header("location:artlist.php");
        }else{
            echo "密码不对";
        }
    }


}

?>
