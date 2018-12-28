<?php
//核心启动类
class Framework {
    //run方法
    public static function run(){
        //echo "hello world";
        //注意顺序老哥
        self::init();
        self::autoload();
        self::dispatch();
    }
    //初始化方法
    private static function init(){
        //路径的常量
        define(DS,DIRECTORY_SEPARATOR);//DIRECTORY_SEPARATOR 表示路径分隔符，在不同的操作系统中解析为不同的符号
        define('ROOT',getcwd().DS);//根目录
        define('APP_PATH',ROOT.'application'.DS);
        define('FRAMEWORK_PATH',ROOT.'framework'.DS);
        define('PUBLIC_PATH',ROOT.'public'.DS);
        define('CONFIG_PATH',APP_PATH."config".DS);
        define('CONTROLLER_PATH',APP_PATH.'controllers'.DS);
        define('MODEL_PATH',APP_PATH.'models'.DS);
        define('VIEW_PATH',APP_PATH.'views'.DS);
        define('CORE_PATH',FRAMEWORK_PATH."core".DS);
        define('DB_PATH',FRAMEWORK_PATH."databases".DS);
        define('LIB_PATH',FRAMEWORK_PATH."libraries".DS);
        define('HELPER_PATH',FRAMEWORK_PATH."helpers".DS);
        define('UPLOAD_PATH',PUBLIC_PATH.'uploads'.DS);
        //index.php?p=admin&c=goods&a=add
        define('PLATFORM',isset($_GET['p'])?$_GET['p']:'home');
        define('CONTROLLER',isset($_GET['c'])?ucfirst($_GET['c']):'Index');//将第一个字母转成大写
        define('ACTION',isset($_GET['a'])?$_GET['a']:'index');
        define('CUR_CONTROLLER_PATH',CONTROLLER_PATH.PLATFORM.DS);
        define('CUR_VIEW_PATH',VIEW_PATH.PLATFORM.DS);
        //加载核心类
        include CORE_PATH.'Controller.class.php';
        include CORE_PATH.'Model.class.php';
        include DB_PATH.'Mysql.class.php';
        //载入配置文件
        $GLOBALS['config']=include CONFIG_PATH.'config.php';
        //开启session
        session_start();
    }
    //路由分发 就是实例化对象调用方法
    //index.php?p=admin&c=goods&a=add
    private static function dispatch(){
        $controller_name=CONTROLLER .'Controller';
        $action_name=ACTION.'Action';
        //实例化对象
        $controller= new $controller_name();
        //调用方法
        $controller->$action_name();
    }
    //自由载入
    //此处 只加载application中的controller和model
    private static function autoload(){
        //spl_autoload_register(array(__CLASS__,'load'));
        spl_autoload_register('self::load');
    }
    //完成指定类的加载
    //此处 只加载application中的controller和model 如果GoodsController,brandModel
    public static function load($classname){
        if(substr($classname,-10)=='Controller'){
            //控制器
            include CUR_CONTROLLER_PATH."{$classname}.class.php";
        }else if(substr($classname,-5)=='Model'){
            //模型
            include MODEL_PATH."{$classname}.class.php";
        }else{
            //省略
        }
    }
}