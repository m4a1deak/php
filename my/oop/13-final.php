<?php
//final类不会被继承
//final class a{
class a{
    public function yy(){
        echo 456;
    }
    final public function zz(){
        echo 789;
    }
}
class b extends a{
    public function xx(){
        echo 123;
    }
    //final方法不可以重写 但可以调用
    /*public function zz(){
        echo 321;
    }*/
}
$zxc = new b();
$zxc->zz();
?>
