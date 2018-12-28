<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $catModel = D('admin/cat');
        $cat = $catModel->field('cat_id,cat_name,num,fenlei')->select();
        $this->assign('cat',$cat);
        $artModel = D('admin/articel');
        $art = $artModel->join('left join cat on articel.cat_id = cat.cat_id')->field('art_id,cat_name,art_time,art_name,thumb')->order('art_id desc')->select();
        $this->assign('art',$art);
        $this->display();
    }
}