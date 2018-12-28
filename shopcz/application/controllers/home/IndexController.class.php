<?php
//前台首页控制器啊
class IndexController extends Controller{
    //显示首页
    public function indexAction(){
        //获取所有分类
        $catModel = new CategoryModel('category');
        $cats = $catModel->frontCats();
        print_r($cats);
        //推荐商品
        $goodsModel = new GoodsModel('goods');
        $bestGoods = $goodsModel->getBestGoods();
        //print_r($bestGoods);
        include CUR_VIEW_PATH . "index.html";
    }
}