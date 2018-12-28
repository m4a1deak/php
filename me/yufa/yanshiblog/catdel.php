<meta charset="utf8">
<?php
$conn = mysql_connect('localhost','root','12345678');
mysql_query('use blog',$conn);
mysql_query('set names utf8',$conn);
//var_dump($conn);
//cat_id
$cat_id = $_GET['cat_id'];
//echo $cat_id;

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

//检测当前栏目下是否有文章
$sql = "select count(*) from art where cat_id='$cat_id'";
$rs = mysql_query($sql);
if(mysql_fetch_row($rs)[0] != 0){
    echo "不能删除,栏目下有文章";
    exit();
}


$sql = "delete from cat where cat_id='$cat_id'";
if(!mysql_query($sql)){
    echo "删除失败";
    echo mysql_error();
    exit();
}else{
    header("location:catlist.php");
}
?>
