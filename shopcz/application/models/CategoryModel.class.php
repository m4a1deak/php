<?php
//商品分类模型
class CategoryModel extends Model{
    //获取所有的商品分类
    public function getCats(){
        $sql = "select * from ".$this->table;
        return $this->db->getAll($sql);
    }
    //无线分类
    public function gettree($p=0,$lv=0){
        $t=array();
        foreach($this->getCats() as $k=>$v){
            if($v['parent_id']==$p){
                $v['$lv']=$lv;
                $t[]=$v; //没有的就是null
                $t=array_merge($t,$this->gettree($v['cat_id'],$lv+1));
            }
        }
        return $t;
    }
    //获取指定分类所有的后代分类id  包括自己 返回一个数组  所有的后再分类id
    public function getSubIds($id){
        $t=array();
        $cats = $this->gettree($id);
        foreach($cats as $v){
            $t[]=$v['cat_id'];
        }
        $t[]=$id;
        return $t;
    }
    //三级分类
    public function child($arr,$pid=0){
        $res = array();
        foreach($arr as $v){
            if($v['parent_id']==$pid){
                $childs = $this->child($arr,$v['cat_id']);
                $v['child']=$childs;
                $res[] = $v;
            }
        }
        return $res;
    }
    public function frontCats(){
        $sql = "select * from ".$this->table;
        $cats = $this->db->getAll($sql);
        return $this->child($cats);
    }

}

