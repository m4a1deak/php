<?php
define("APPID","wx8c077eecf9a338e9");
define("APPSECRET","22e21343c7a4719e6a7071f9eb4a067b");
define("TOKEN","weixin111");
header('content-type:image/jpeg');
require('./wechat.inc.php');
$wechat = new WeChat(APPID,APPSECRET,TOKEN);
echo $wechat->_getQRCode(604800,"temp",6);