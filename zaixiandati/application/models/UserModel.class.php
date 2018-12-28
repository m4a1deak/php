<?php
class UserModel extends Model{
    public function show(){
        $sql = "select * from ".$this->table;
        return $this->db->getAll($sql);
    }
    public function add($name,$pwd){
        $pwd = md5($pwd);
        $sql = "insert into ".$this->table." (user_name,possword) values('$name','$pwd')";
        return $this->db->query($sql);
    }
    public function xxx($sum,$name){
        $sql = 'update '.$this->table." set fenshu=".$sum." where user_name=".$name;
        return $this->db->query($sql);
    }
    public function getall(){
        $sql="select * from ".$this->table;
        return $this->db->getAll($sql);
    }
}
?>
