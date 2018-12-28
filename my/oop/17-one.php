<?php
//1.普通类的实例化 得到两个对象
/*class Single{
    public $rand;
    public function __construct(){
        $this->rand = mt_rand(100000,9999999999);
    }
}
var_dump(new Single());
var_dump(new Single());*/


//2 无法从外部访问保护的方法
/*class Single{
    public $rand;
    protected function __construct(){
        $this->rand = mt_rand(100000,9999999999);
    }
}
var_dump(new Single());
var_dump(new Single());
*/


//3.4. 转移控制权 改为静态方法
/*class Single{
    public $rand;
    protected function __construct(){
        $this->rand = mt_rand(100000,9999999999);
    }
    public static function getins(){
        return new Single();
    }
}*/
//想要用getins 就要实例化
//只要实例化就会调用构造方法 报致命错误 终止  应该使用静态方法
//var_dump(new Single());
//var_dump(new Single());
/*var_dump(Single::getins());
var_dump(Single::getins());*/


/*class Single{
    public $rand;
    public static $ob = null;
    protected function __construct()
    {
        $this->rand = mt_rand(100000, 9999999999);
    }
    public static function getins(){
        if(Single::$ob === null){
            Single::$ob =  new Single();
        }
        return Single::$ob;
    }
}
var_dump(Single::getins());//一样
var_dump(Single::getins());//一样*/

class Single{
    public $rand;
    public static $ob = null;
     final protected function __construct()
    {
        $this->rand = mt_rand(100000, 9999999999);
    }
    public static function getins(){
        if(Single::$ob === null){
            self::$ob =  new Single();
        }
        return Single::$ob;
    }
}
class B extends Single{
    public function __construct(){
        var_dump(mt_rand(100000, 2222222));
    }
}
//继承得来又不一样了 要防止被继承
//new B();
//new B();
var_dump(Single::getins());//一样
var_dump(Single::getins());
//var_dump(Single::$ob);




?>