<?php
class GoodsModel extends Model{
    //推荐商品
    public function getBestGoods(){
        $sql = "select goods_id,goods_name,goods_img,shop_price from {$this->table} where is_best=1 and is_onsale=1 order by goods_id desc limit 0,4";
        return $this->db->getAll($sql);
    }
}
