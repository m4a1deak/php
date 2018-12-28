<?php
$ip = "111.111.111.111";
session_start();
if(isset($_SESSION[$ip]['sj'])){
    $_SESSION[$ip]['jsj']=$_SESSION[$ip]['sj'];
}
$_SESSION[$ip]['sj']=time();
if( $_SESSION[$ip]['sj']- $_SESSION[$ip]['jsj']>6){
    $_SESSION[$ip]['num']=1;
}else{
    $_SESSION[$ip]['num']++;
}
if($_SESSION[$ip]['num']>10){
    echo "别访问了";
}
var_dump($_SESSION[$ip]);
//session_destroy() ;