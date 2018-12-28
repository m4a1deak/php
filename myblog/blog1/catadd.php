<?php
require('./lib/init.php');
if(!acc()){header("location:login.php");}
if(empty($_POST)){require( ROOT .'/view/admin/catadd.html');
}else{
    if(empty(trim($_POST['catname']))){fail("栏目不能为空");}
    $sql = "select count(*) from cat where catname='$_POST[catname]'";
    if(mGetOne($sql) != 0){fail("栏目已经存在");
    }else{$sql = "insert into cat (catname) values ('$_POST[catname]')";
        if(mQuery($sql)){succ("栏目添加成功");}}
}






?>
