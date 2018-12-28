<?php
//类是'大量的,同类事物共同特点的抽象描述;
//而对象是以类做模板 形成的一个具体实例
class A{
    public $name = 'aaa';
    public $age = 50;
    public function kx(){
        echo "开车";
    }
}
//new 一个对象 在内存中产生
$a = new A();
echo $a->name;
//new 一个对象 在内存中再产生一个
$b = new A();
$b->name='bbb';
echo $b->name;
//在内存中找到方法名 返回类中调用这个方法名
$b->kx();
?>
