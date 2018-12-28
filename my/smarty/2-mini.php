<?php

class Mini{
    public $data = array();
    public function tit($name){
        $str = file_get_contents($name);
        //                                双引号会解析变量
        $str = str_replace('{$','<?php echo $this->data[\'',$str);
        $str = str_replace('}',"'];?>",$str);
        $filename = $name.".php";
        file_put_contents($filename,$str);
        return $filename;
    }
    //引用文件
    public function display($file){
        $file = $this->tit($file);
        //var_dump($tit);//NULL 此时没有这个属性
        include($file);
        //var_dump($this->data['tit']);
    }
    //定义一个方法来改变类里的属性
    public function assign($key,$value){
        $this->data[$key]=$value;
    }

}
$tit = "下起了雨 嘎嘎嘎";

$mini = new Mini();
$mini->assign('tit',$tit);
$mini->display('1.html');

?>
