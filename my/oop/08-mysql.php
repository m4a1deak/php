<?php
class Mysql{
    public $link;
    //连接数据库
    public function __construct(){
        $this->conn();
    }
    public function conn(){
        $cfg = array(
            'host' => 'localhost',
            'user' => 'root',
            'password' =>'12345678',
            'db' => 'text',
            'charset' => 'utf8'
        );
        //连接数据库  地址  用户名 密码  选库
        $this->link =mysqli_connect($cfg['host'],$cfg['user'],$cfg['password'],$cfg['db']);
        //var_dump($conn);返回的是一个对象
        mysqli_query($this->link,'set names '.$cfg['charset']);
    }
    //发送查询
    public function query($sql){
        return mysqli_query($this->link,$sql);//返回的是一个对象
    }
    //查询多行数据 返回数组
    public function getAll($sql){
        $data = array();
        $res = $this->query($sql);
        while($row = mysqli_fetch_assoc($res)){
            $data[] = $row;
        }
        return $data;
    }
}
$mysql = new Mysql();
$a = $mysql->getAll("select * from user");
var_dump($a);
$res = $mysql->query('select * from user');
var_dump($res);
?>
