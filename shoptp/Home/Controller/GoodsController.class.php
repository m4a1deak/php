<?php
namespace Home\Controller;
use Think\Controller;
//商品控制器
class GoodsController extends Controller{
    //列表展示
    public function showlist(){
        $this->display();
    }
    //详情
    public function detail(){
        $this->display();
    }
}
