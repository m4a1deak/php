<?php
namespace beijing\haidian\xisanqi;
class Goods{
    public $producttime = "2000-10-12";
}
namespace liaoning\shenyang\tiexi;
class Animal{
    public $name = 'duck';
}
namespace shandong\qingdao\laoshan;
class Persib{
    public $name = 'Chinese';
}
class Animal{
    public $name = 'cat';
}
//引入空间与当前空间冲突时 用别名
use liaoning\shenyang\tiexi\Animal as ani;
$obj = new ani();
echo $obj->name;