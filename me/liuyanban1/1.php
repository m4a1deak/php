<meta charser="utf8">
<?php
/**
 * Created by PhpStorm.
 * User: guanhui
 * Date: 2017/3/26
 * Time: 18:55
 */
require('./conn.php');
if(empty($_POST)){
    require('./index.html');
}else{
    $sql = "insert into msg (name,email,content) values('$_POST[name]','$_POST[email]','$_POST[content]')";
    $res = mysql_query($sql);
    if(!$res){
        echo mysql_error();
        exit();
    }else{
        echo "<a href='2.php'>查看</a>";
    }
}







?>