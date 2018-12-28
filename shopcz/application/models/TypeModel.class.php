<?php
//商品类型模型
class TypeModel extends Model{
    //获取所有类型
    public function getTypes(){
        $sql="select * from ".$this->table;
        return $this->db->getAll($sql);
    }
    //分页获取商品类型 加强版
    public function getPageTypes($offset,$limit){
        $sql="select *,count(attr_id) as num from cz_attribute as a RIGHT join cz_goods_type as b on a.type_id=b.type_id group by type_name order by b.type_id desc limit $offset,$limit";
        return $this->db->getAll($sql);
    }
    //分页获取商品类型
    /*public function getPageTypes($offset,$limit){
        $sql="select * from ".$this->table." order by type_id desc limit ".$offset.",".$limit;
        return $this->db->getAll($sql);
    }*/
}

?>
