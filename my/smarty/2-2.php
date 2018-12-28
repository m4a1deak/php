<?php
class Mini{
    public $data;
    public function tit($name){
        $str = file_get_contents($name);
        $str = str_replace('{$',"<?php echo \$this->data['",$str);
        $str = str_replace('}',"'];?>",$str);
        $filename = $name."1.php";
        file_put_contents($filename,$str);
        return $filename;
    }
    public function display($file){
        $name = $this->tit($file);
        //var_dump($name);"1.html1.php"
        include($name);
        //var_dump($tit);空
        //var_dump($this->data['tit']);
    }
    public function assign($a,$b){
        //$this->a = $x;
        //var_dump($x);
        $this->data[$a]=$b;
    }
}

$tit = "哈哈哈哈";
$mini = new Mini();
$mini->assign('tit',$tit);
$mini->display("1.html");
print_r($mini->data);
?>
