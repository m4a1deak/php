<?php
class Zhaosi{
    //访问获取不可见属性时被调用
    public function __get($a){
        echo $a;
    }
    //设置不可见属性时触发
    public function __set($a,$b){
        echo $a."-----".$b;
    }
    public function __isset($a){
        echo $a;
    }
    public function __unset($a){
        echo $a;
    }
}
$abc = new Zhaosi();

$abc->meiyou;
echo "<br>";
$abc->xingming="Lisi";
$abc->fbb="黄飞";
echo "<br>";
isset($abc->youmeiyou);
echo "<br>";
unset($abc->meiyouba);
?>
