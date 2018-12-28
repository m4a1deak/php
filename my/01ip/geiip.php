<meta charset="utf-8">
<?php

$conn = mysql_connect('localhost','root','12345678');
mysql_query('use blog',$conn);
mysql_query('set names utf8',$conn);

$name = $_POST['name'];
$aip = getIp();
$nameip = ipToInt($aip);
$time = time();
if(empty($_POST)){
    require('123.html');
}else{
    $sql = "insert into ipip (name,ip,time) values ('$name','$nameip','$time')";
    $res = mysql_query($sql);
    if($res){
       echo "ok";
    }
}



//转换ip
function ipToInt($ip){
    $iparr = explode('.',$ip);
    $num = 0;
    for($i=0;$i<count($iparr);$i++){
        $num += intval($iparr[$i]) * pow(256,count($iparr)-($i+1));
    }
    return $num;
}
//获取ip
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
?>
