<?php
//PHP5.6之前 类属性只能是直接量或常量 而不能是表达式的结果 函数调用 运算
//PHP5.6开始允许使用数字,字符串字面值和常量的标量表达式(数学运算,比较运算)
class Ys{
    //public $a = mt_rand(1,100); 函数调用 会报错
    public $b = 2+2; // 数学运算可以
    public $c = 0 || 1; //逻辑运算可以
    public $d = array('a'=>1,'b'=>array('b1'=>1,'b2'=>2));
}
$ff = new Ys();
echo $ff->b;
echo $ff->c;
print_r($ff->d);
?>
