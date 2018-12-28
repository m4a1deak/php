<?php
class fu{
    public $gy = "我是公有的";
    protected $bh = "我是保护的";
    private $sy = "我是私有的";
    public function t1(){
        echo $this->gy;
        echo $this->bh;
        echo $this->sy;
    }
}
class zi extends fu{
    public function t2(){
        //echo $this->gy;可以
        //echo $this->bh;可以
        //echo $this->sy;不可以
    }
}
$fu = new fu();
//echo $fu ->gy; 公有变量 可以 在类外访问
//echo $bh ->bh; 保护变量 不能 在类外访问
//echo $sy ->sy; 私有变量 不能 在类外访问

//echo $fu->t1(); 都可以在本类中访问到

$zi = new zi();

//$zi->t2(); 公有,保护都 可以 在子类中访问 私有的不可以

?>
