<meta charset="utf8">
<?php
//判断表单是否有post数据
if(empty($_POST)){
    include('./view/admin/catadd.html');
}else{
    //print_r($_POST);
    //连接数据库
    $conn = mysql_connect('localhost','root','12345678');
    mysql_query('use blog',$conn);
    mysql_query('set names utf8',$conn);
    //var_dump($conn);
    //检测栏目名称是否为空
    $cat['catname']=trim($_POST['catname']);
    //trim 去掉字符串前后空格
    if(empty($cat['catname'])){
        echo '栏目不能为空';
        exit();
    }
    //检测栏目名是否存在
    $sql = "select count(*) from cat where catname='$cat[catname]'";
    //select返回的是个资源类型
    $rs = mysql_query($sql);
    //var_dump(mysql_fetch_row($rs)[0]);//string(1) "0"
    if(mysql_fetch_row($rs)[0] != 0){//枚举数组
        echo "栏目已经存在";
        exit();
    }
    //写入栏目表
    $sql = "insert into cat (catname) values ('$cat[catname]')";
    //insert返回bool
    if(!mysql_query($sql)){
        echo "插入失败";
        echo mysql_error();
    }else{
        echo "插入成功";
    }
    //print_r($_POST);
    //mysql_fetch_assoc  Array ( [count(*)] => 0 )
    //mysql_fetch_row    Array ( [0] => 0 )
}

?>
