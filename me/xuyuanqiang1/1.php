<?php
$conn = mysql_connect('localhost','root','12345678');
mysql_query('set names utf8',$conn);
mysql_query('use text',$conn);
//print_r($conn);
$rtop = mt_rand(0,419);
$rleft = mt_rand(0,690);
$arr = array('o1.gif','o2.gif','o3.gif');
if(!empty($_POST)){
    $pic = $arr[array_rand($arr)];
    $sql = "insert into lovewall(addressee,sender,content,rtop,rleft,pic) values('$_POST[addressee]','$_POST[sender]','$_POST[content]','$rtop','$rleft','$pic')";
    $res = mysql_query($sql);
        $ref = $_SERVER['HTTP_REFERER'];
        header("location: $ref ");
}
$sql = "select * from lovewall";
$res = mysql_query($sql);
if(!$res){
    echo mysql_error();
    exit();
}
$data = array();
while($row = mysql_fetch_assoc($res)){
    $data[] = $row;
}
require('./lw.html');
?>