<?php
require('./conn.php');
$id = $_GET['id'];
if(empty($_POST)){
    $sql = "select * from msg where id='$id' ";
    $res = mysql_query($sql);
    if(!$res){
        echo mysql_error();
        exit();
    }
    $arr = mysql_fetch_assoc($res);

}else{
    $sql = "update msg set name='$_POST[name]',email='$_POST[email]',content='$_POST[content]' where id='$id'   ";
    $res = mysql_query($sql);
    if(!$res){
        echo mysql_error();
        exit();
    }else{
        header('location:2.php');
    }

}




require('./msg.html');
?>