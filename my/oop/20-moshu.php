<?php
class Wsz{
    public function __set($a,$b){
        echo "111".$a."222".$b;
    }
}
$xy = new Wsz();
//类本身失去了对内部属性的控制权
$xy->chaye="红茶";
echo $xy->chaye;
print_r($xy);
class Foo {
}
$foo = new Foo();
$foo->age = 9;
print_r($foo);

?>
