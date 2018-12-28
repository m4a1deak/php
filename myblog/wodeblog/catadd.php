<?php
//引入配置文件
require('./lib/init.php');
//判断是否有post
if(empty($_POST)){
    //如果post为空时加载html页面
    require( ROOT .'/view/admin/catadd.html');
}else{
    //trim 去掉字符串首尾处的空白字符
    //判断标题是否为空
    if(empty(trim($_POST['catname']))){
        fail("栏目不能为空");
    }
    //判断标题是否存在
    $sql = "select count(*) from cat where catname='$_POST[catname]'";
    if(mGetOne($sql) != 0){
        fail("栏目已经存在");
    }else{
        //添加标题
        $sql = "insert into cat (catname) values ('$_POST[catname]')";
        if(mQuery($sql)){
            succ("栏目添加成功");
        }

    }
}






?>
