<?php
//商品分类模型
class CategoryModel extends Model{
    //获取所有类型
    public function getTi(){
        $sql="select * from ".$this->table;
        return $this->db->getAll($sql);
    }
    public function getPageBrands($offset,$limit){
        $sql = "select * from {$this->table} limit $offset,$limit";
        return $this->db->getAll($sql);
    }
    //获取一个
    public function get1($id){
        $sql = "select * from ".$this->table." where ti_id=".$id;
        return $this->db->getRow($sql);
    }
}

