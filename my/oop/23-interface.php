<?php
//接口
//抽象类是类的模板
//接口则是方法的模板
interface feier{
    public function fei($a,$b);
}
interface paoer{
    public function pao($a,$b);
}
interface xiashuier{
    public function xiashui($a,$b);
}

class che implements feier,paoer{
    public function fei($a,$b){
        echo "我能飞";
    }
    public function pao($a,$b){
        echo "我能跑";
    }
}
$x = new che();
$x->fei("1",'2');
?>
