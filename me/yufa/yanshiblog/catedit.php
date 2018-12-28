<meta charser="utf8">
<?php
$conn = mysql_connect('localhost','root','12345678');
mysql_query('use blog',$conn);
mysql_query('set names utf8',$conn);
//var_dump($conn);

$cat_id = $_GET['cat_id'];
//var_dump($cat_id);

//检测 栏目id 是否为数字
//var_dump($cat_id);//string型
//is_numeric()检测变量是否为数字或者数字字符串
if(!is_numeric($cat_id)){
    echo '栏目不合法';
    exit();
}

//检测栏目是否存在 id是否存在
//$sql = "select * from cat where cat_id='$cat_id'";
//var_dump(mysql_query($sql));//返回资源类型,没查到也是这样
$sql = "select count(*) from cat where cat_id='$cat_id'";
$rs = mysql_query($sql);
//var_dump(mysql_fetch_row($rs));
if(mysql_fetch_row($rs)[0] == 0){
    echo "栏目不存在";
    exit();
}

if(empty($_POST)){
    $sql = "select catname from cat where cat_id='$cat_id'";
    $rs = mysql_query($sql);
    $cat = (mysql_fetch_assoc($rs));
    require('./view/admin/catedit.html');
}else{
    $sql = "update cat set catname='$_POST[catname]' where cat_id='$cat_id'";
    if(!mysql_query($sql)){
        echo "修改失败";
        echo mysql_error();
    }else{
        echo ' 修改成功';
    }
}



?>
