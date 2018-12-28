<?php
//admin模型
class AdminModel extends Model{
    public function getAdmins(){
        $sql = "select * from cz_admin";
        return $this->db->getAll($sql);
    }
    //验证密码和用户名
    public function checkUser($username,$password){
        $password=md5($password);
        $sql="select * from {$this->table} where admin_name='$username' and password='$password' limit 1";//只查询第一条
        return $this->db->getRow($sql);//返回一维数组
    }
}
