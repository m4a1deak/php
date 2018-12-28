<?php

require('./conn.php');

$id = $_GET['id'];

if(empty($_POST)){
    $sql = "select * from msg where id='$id' ";
    $res = mysql_query($sql);
    //print_r(mysql_fetch_assoc($res));
    if(!$res){
        echo mysql_error();
        exit();
    }
    $arr = mysql_fetch_assoc($res);
    require('./msg.html');
}else{
    $sql = "update msg set name='$_POST[name]',email='$_POST[email]',content='$_POST[content]' where id='$id' ";
    $res = mysql_query($sql);
    if(!$res){
        echo "cuo";
    }else{
        echo "gong";
    }


}




?>
