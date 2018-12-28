<?php
//类的封装性
//不允许外部调用
//开放部分方法 来间接调用 atm可以检测密码但不可以查询密码
class Atm{
    //protected保护
    protected function Pass(){
        return "123123";
    }
    //public公共
    public function check($pwd){
        return $this->Pass() == $pwd;
    }
}
$a = new Atm();
if($a->check("123123")){
    echo "对了";
}else{
    echo "错了";
}
?>
