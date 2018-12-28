<?php
/*define('shouji','zhangsan');
define('shouji','lisi');
//同名称常量只能define一次
echo shouji;*/
namespace linglan;
function get(){
    echo "铃兰";
}
const SS = 123;
class A{
    public $name = 'a';
}
namespace fengxian;
function get(){
    echo "凤仙";
}
const SS = 321;
class A{
  public $name = 'a1';

}
\linglan\get();
get();

echo \linglan\SS;
echo SS;

$p = new \linglan\A();
echo $p->name;

$x = new A();
echo $x->name;
?>
