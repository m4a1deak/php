<?php
//构造方法 __construct 在 new 对象时 自动触发的方法
//对象什么时间被销毁
//存储对象的变量被赋为其它值,变量被unset,页面结束 都会被销毁
//构造方法的旧式声明
//一个和类名同名的方法 被理解为构造方法
class A{
    public function aa(){
        echo 111;
    }
    //构造函数 类,一旦实例化就会被调用
    public function __construct($b,$c){
        //echo '构造函数';
        echo $b,$c;
    }
    //析构函数 对象被销毁时调用
    public function __destruct(){
        echo '析构函数';
    }

}
new A(123,123);
//echo $a->aa();
?>
