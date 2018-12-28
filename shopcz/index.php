<?php 
//载入核心启动类
include('./framework/core/Framework.class.php');
//第一版
//$app = new Framework();
//$app->run();
//第二版 流行写法 大家都说666
Framework::run();
//echo getcwd();//当前路径目录