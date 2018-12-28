<?php
require('./init.php');
if(!empty($_POST)){
    $pwd = trim($_POST['password']);
    $username = trim($_POST['username']);
    $pwd = danyinhao($pwd);
    $pwd = deepspecialchars($pwd);
    $username = danyinhao($username);
    $username = deepspecialchars($username);
    if(empty($username)){
        echo "名字不能为空";
        exit;
    }
    if(MD5($pwd)=='fae0b27c451c728867a567e8c1bb4e53'){
        session_start();
        /*if(in_array($username,$_SESSION['name'])){
            echo "名字已存在";
            exit();
        }*/
        $_SESSION['name'][$username]=$username;
        //print_r($_SESSION);
            //echo $_SESSION['name'][$username];
            require("./ind.html");
    }else{
        echo "密码不对";
        exit;
    }
}else{
    require("./login.html");
}





