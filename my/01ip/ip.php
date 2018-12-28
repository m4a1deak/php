<?php
//$a = ip2long('192.123.123.123');
//echo sprintf('%u',$a);
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

//应用

/*$ip = '210.110.11.49';
$ip_int = ip2long($ip);
echo $ip."<br />";
echo $ip_int."<br />";
echo long2ip($ip_int);*/

$ip = '192.123.123.123';

function ipToInt($ip){
    $iparr = explode('.',$ip);
    $num = 0;
    for($i=0;$i<count($iparr);$i++){
        $num += intval($iparr[$i]) * pow(256,count($iparr)-($i+1));
    }
    return $num;
}
//var_dump($ip);
echo  $ip.'<br />';
$ip_int = ipToInt($ip);
echo $ip_int.'<br />';
echo long2ip($ip_int);
?>
