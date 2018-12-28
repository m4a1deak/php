<?php
namespace Home\Controller;
use \Think\Controller;
class CatController extends Controller{
    public function cat(){
        $catModel = D('Admin/Cat');
        $this->assign('cattree',$catModel->gettree());
        $goodsModel = D('Admin/goods');//跟表有关
        $goodslist = $goodsModel->field('goods_id,goods_name,goods_img,shop_price,market_price')->where(array('cat_id'=>I('cat_id')))->select();
        $this->assign('goodslist',$goodslist);
        print_r(array_reverse(session('history'),true));
        $this->assign('lili',array_reverse(session('history'),true));
        $this->display();
    }
}

?>
