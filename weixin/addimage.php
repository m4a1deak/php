<?php
define("APPID","wx8c077eecf9a338e9");
define("APPSECRET","22e21343c7a4719e6a7071f9eb4a067b");
define("TOKEN","weixin111");
header("content-type:text/html;charset=utf-8");
require("./wechat.inc.php");
$wechat = new WeChat(APPID,APPSECRET,TOKEN);
$wechat->_addMedia('image', './1.jpg');