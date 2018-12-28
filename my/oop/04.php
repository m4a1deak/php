<?php
//创建类 不区分大小写
class Ren{
    //声明类的属性 可以复制也可以不赋值
    public $name = 'liuneng';
    //声明类的方法 function
    public function lihai(){
        echo "666";
    }
}
//声明一个对象 付给一个变量
$ff = new Ren();
//调用对象的属性
echo $ff->name;
//调用对象的方法
$ff->lihai();
?>
