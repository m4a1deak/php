<meta charset="utf8">
<?php
$conn = mysql_connect('localhost','root','12345678');
mysql_query('use blog',$conn);
mysql_query('set names utf8',$conn);
//var_dump($conn);

$sql = "select * from cat";
$rs = mysql_query($sql);
$cat = array();
while($row = mysql_fetch_assoc($rs)){
    $cat[] = $row;
}
//print_r($cat);

require('./view/admin/catlist.html');

?>
