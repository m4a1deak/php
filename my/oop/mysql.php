<?php
abstract class aDB
{
    abstract public function conn();
    abstract public function query($sql);
    abstract public function getAll($sql);
    abstract public function getRow($sql);
    abstract public function getOne($sql);
    abstract public function Exec($data , $table , $act='insert' , $where='0');
    abstract public function lastId();
    abstract public function affectRows();
}
class  Mysql extends aDB{
    public $link;
    //构造方法
    public function __construct(){
        $this->conn();
    }
    //连接数据库 读取配置文件
    public function conn(){
        $cfg = include('./config.php');
        //var_dump($cfg);
        $this->link = new mysqli($cfg['host'],$cfg['user'],$cfg['pwd'],$cfg['db']);
        //var_dump($mysqli);
        $this->link->query('set names '.$cfg['charset']);//上边连了
    }
    //发送一个sql语句
    public function query($sql){
        return $this->link->query($sql);
    }
    public function getAll($sql){
        $data = array();
        $res = $this->query($sql);
        //var_dump($res); //返回一个对象
        while($row = $res->fetch_assoc()){
            $data[] = $row;
        }
        return $data;
    }
    //获取单行数据
    public function getRow($sql){
        $res = $this->query($sql);
        //var_dump($res);
        $row = $res->fetch_assoc();
        return $row;
    }
    public function getOne($sql){
        $res = $this->query($sql);
        $row = $res->fetch_row()[0];
        return $row;
    }
    //insert update
    public function Exec($data , $table , $act='insert' , $where='0'){
        if($act == 'insert'){
            //insert into xxx () values ()
            $sql = 'insert into '.$table.'(';
            $sql .= implode(',',array_keys($data)) .") values ('";
            $sql .=implode("','",array_values($data))."')";
        }else if($act = 'update'){
            //update xxxx set xxx="xxx" where
            $sql="update $table set ";
            foreach($data as $k=>$v){
                $sql .= $k . "='" .$v."'," ;
            }
            $sql = rtrim($sql,",") ." where " .$where;
        }
        return $this->query($sql);
    }
    //获得上一步添加操作的主键id
    public function lastId(){
        return $this->link->insert_id;
    }
    //函数返回前一次 MySQL 操作所影响的记录行数
    public function affectRows(){
        return $this->link->affected_rows;
    }

}
$mysql = new Mysql();
$mysql->Exec(['catname'=>'xxx','num'=>'18'],'cat','update','cat_id=37');
$b = $mysql->affectRows();
//var_dump($b);
$c=$mysql->getOne("select * from cat");
//var_dump($c);
$d = $mysql->query('select * from cat');
//var_dump($d);
