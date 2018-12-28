<?php
require('./conn.php');

$sql = "select * from msg";
$res = mysql_query($sql);
if(!$res){
    echo mysql_error();
    exit();
}
$data = array();
while($row = mysql_fetch_assoc($res)){
    $data[]=$row;
}



require('./list.html');
?>