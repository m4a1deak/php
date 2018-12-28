<?php
define('PI',12345);
class A{
    const PI = 54321;
    public function hh(){
        echo A::PI;//类常量
        echo PI;//全局常量
    }
}
class B extends A{

}
$xx = new A();
$xx->hh();
$yy = new B();
$yy->hh();
?>
