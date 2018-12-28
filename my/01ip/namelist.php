<?php
$conn = mysql_connect('localhost','root','12345678');
mysql_query('use blog',$conn);
mysql_query('set names utf8',$conn);

$sql = "select * from ipip";
$res = mysql_query($sql);
$data = array();
while($row = mysql_fetch_assoc($res)){
    $data[]=$row;
}
//$date['ip']=1863200730;
//echo $daaa= long2ip($date['ip']);
//print_r($data);
require('list.html');
?>
