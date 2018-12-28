<?php
$a = "111.111.111.111";
session_start();
$_SESSION[$a]['kaiguan'] = true;
if(isset($_SESSION[$a]['xinshijian'])){
    $_SESSION[$a]['jiushijian'] = $_SESSION[$a]['xinshijian'];
}
$_SESSION[$a]['xinshijian'] = time();
if( ($_SESSION[$a]['xinshijian']- $_SESSION[$a]['jiushijian'])<60){
    $_SESSION[$a]['num'];
    echo "两次时间差:",$_SESSION[$a]['xinshijian']- $_SESSION[$a]['jiushijian'],"<br>";
    $_SESSION[$a]['num']++;
    if($_SESSION[$a]['num']>=10){
        echo "您访问次数过多<br>";
        $_SESSION[$a]['kaiguan'] = false;
        echo "你被封了 2分钟后解封<br>";
    }
    echo "60秒内访问的次数:",$_SESSION[$a]['num'],"<br>";
}else if(($_SESSION[$a]['xinshijian']- $_SESSION[$a]['jiushijian'])>120){
    $_SESSION['$a']['num']=1;
    $_SESSION['$a']['kaiguan']=true;
}

var_dump($_SESSION[$a]);
session_destroy();
//var_dump($a);

