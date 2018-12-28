<?php
abstract class aUpload {
    public $allowExt = array('jpg' , 'jpeg' , 'png' , 'rar');
    public $maxSize = 1; //最大上传大小
    protected $error = ''; //错误信息
    abstract public function getInfo($name);
    abstract public function createDir();
    abstract public function randStr($len = 8);
    abstract public function up($name);
    abstract protected function checkType($ext);
    abstract protected function checkSize($size);
    public function getError() {
        return $this->error;
    }
}
class upload extends aUpload{
    //获取文件信息
    public function getInfo($name){
        return $_FILES[$name];
    }
    //创建文件路径
    public function createDir(){
        $dir = 'up/' .date('Y/m/d',time());
        if(!is_dir($dir)){
            mkdir($dir,0777,true);
        }
        return $dir;
    }
    //生成随机文件名
    public function randStr($len = 8){
        return  md5(time()).mt_rand(111,999);
    }
    public function up($name){}
    //获取文件类型
    protected function checkType($ext){
        return in_array($ext,$this->allowExt);
    }
    //大小
    protected function checkSize($size){
        return $size<$this->maxSize*1024*1024*1024;
    }
    public function qup($name){
        if(!isset($_FILES[$name])){
            echo "没有";
            exit();
        }
         $info = $this->getInfo($name);
         $e =ltrim(strrchr($info['name'],'.'),'.');
        if(!$this->checkType($e)){
            echo "不是图片";
        }
        if(!$this->checkSize($info['size'])){
            echo "太大";exit();
        }
        $dir = $this->createDir();
        $filename =$this->randStr(). "." .$e;
       if( move_uploaded_file($info['tmp_name'],$dir."/".$filename)){
           //echo $dir.$filename;
           $data['path'] = $dir;
           $data['filename'] = $filename;
           return $data;
       }
    }

}
$file =new upload();
$a = $file->qup('pic');
var_dump($a);
?>
