<?php
class A{
    public static $name = 'lisi';
    public static function xx(){
        echo 'haha';
    }
}
class B extends A{
    public  $nam = "d";
}
//echo A::$name;
//echo A::xx();
$x = new B();
//静态属性和方法只能有一个
echo $x->nam;
echo B::$name;
?>
