<?php

require('./conn.php');

$sql = "select * from msg";
$res = mysql_query($sql);
$data = array();
while($row = mysql_fetch_assoc($res)){
    $data[] = $row;
}


require('./list.html');

?>
