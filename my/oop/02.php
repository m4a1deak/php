<?php
class fei{
    //类中的属性
    public $name = 'lisi';

    //类的方法
    public function fly(){
    echo '起飞';
    }
}
//new一个对象
$ff = new fei();
//调用对象中的属性
echo $ff->name;
//调用对象中的方法
$ff->fly();

?>
