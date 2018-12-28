<?php
require('./conn.php');
if(empty($_POST)){
    require('./index.html');
}else{
    $sql = "insert into msg(name,email,content) values('$_POST[name]','$_POST[email]','$_POST[content]')";
    $res = mysql_query($sql);
    if(!$res){
        echo mysql_error();
        exit();
    }else{
        echo "chenggong";
    }
}


?>
