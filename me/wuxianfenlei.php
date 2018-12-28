<?php
class Mysql{
    public $link;
    public function __construct(){
        $this->conn();
    }
    public function conn(){
        $cfg=array(
            'host'=>'localhost',
            'user'=>'root',
            'password'=>'12345678',
            'db'=>'shop',
            'charset'=>'utf8',
        );
        $this->link=new mysqli($cfg['host'],$cfg['user'],$cfg['password'],$cfg['db']);
        $this->link->query('set names '.$cfg['charset']);
    }
}
$mysql = new Mysql();
$sql = "select * from cat";
$res = $mysql->link->query($sql);
while($row = $res->fetch_assoc()){
    $GLOBALS['data'][]=$row;
}
//var_dump($data);
print_r(gettree());
function gettree($p=0,$lv=0){
    $t = array();
    foreach( $GLOBALS['data'] as $k=>$v){
        if($v['parent_id']==$p){
            $v['lv']=$lv;
            $t[]=$v;
            $t=array_merge($t,gettree($v['cat_id'],$lv+1));
        }
    }
    return $t;
}
?>
