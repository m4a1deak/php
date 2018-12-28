<?php
namespace Admin\Model;
use Think\Model\RelationModel;
class GoodsModel extends RelationModel{
    public $_link = array(
        'comment'=>self::HAS_MANY,
    );
    //protected $insertFields ='goods_name,goods_sn,goods_img';
    protected $_validate = array(
      //array(验证字段,验证规则,错误提示,[验证条件,附加规则,验证时间]);
        array('goods_name','3,12','长度不符合啊','1','length','3'),
        array('goods_sn','','重复了','1','unique','3'),
        array('shop_price','pr','shop_pricesuol','1','callback','3'),
    );
    public function pr(){
        return true;
    }
    protected $_auto =array(
        //array(完成字段,完成规则,[完成条件,附加规则])
        array('add_time','time',3,'function'),
    );
}

?>
