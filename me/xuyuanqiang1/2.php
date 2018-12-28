<?php
$conn = mysql_connect('localhost','root','12345678');
mysql_query('set names utf8',$conn);
mysql_query('use text',$conn);
$sql = "select * from lovewall";
$res = mysql_query($sql);
$data = array();
while($row = mysql_fetch_assoc($res)){$data[] = $row;}
$rtop = mt_rand(0,419);
$rleft = mt_rand(0,690);
$arr = array('o1,gif','o2.gif','o3.gif');
$pic = $arr[array_rand($arr)];
if(!empty($_POST)){
    $sql = "insert into lovewall(addressee,sender,content,rtop,rleft,pic) values('$_POST[addressee]','$_POST[sender]','$_POST[content]','$rtop','$rleft','$pic')";
    $res = mysql_query($sql);
    $ref  = $_SERVER['HTTP_REFERER'];
    header("location:$ref");
}
require('./lw.html');
?>