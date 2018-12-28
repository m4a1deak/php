<?php

require('./conn.php');
$id = $_GET['id'];
$sql = "delete from msg where id='$id' ";
$res = mysql_query($sql);
if(!$res){

}else{
    header('location:22.php');
}

?>
