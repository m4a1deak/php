<?php
function ipToInt($ip){
    $iparr = explode('.',$ip);
    $num = 0;
    for($i=0;$i<count($iparr);$i++){
        $num += intval($iparr[$i]) * pow(256,count($iparr)-($i+1));
    }
    return $num;
}
//取得ip
function getIp(){
    static $realip = NULL;
    if ($realip !== NULL) {
        return $realip;
    }
    if (getenv('HTTP_X_FORWARDED_FOR')){
        $realip = getenv('HTTP_X_FORWARDED_FOR');
    }else if(getenv('HTTP_CLIENT_IP')){
        $realip = getenv('HTTP_CLIENT_IP');
    }else{
        $realip = getenv('REMOTE_ADDR');
    }
    return $realip;
}
$x = getIp();
$Ip['ip'] = ipToInt($x);
//echo $ip_int.'<br />';
echo long2ip($Ip['ip'] );

ip2long(  )
?>
