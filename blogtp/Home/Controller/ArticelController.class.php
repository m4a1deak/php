<?php
namespace Home\Controller;
use \Think\Controller;
class ArticelController extends Controller{
    public function index(){
        $id = I('get.art_id');
        $art = D('admin/articel')->where("art_id='$id'")->find();
        $this->assign('art',$art);
        $this->display();
    }
    public function artlist(){
        $catModel = D('admin/cat');
        $cat = $catModel->field('cat_id,cat_name,num,fenlei')->select();
        $this->assign('cat',$cat);
        $arts = D('admin/articel')->join('left join cat on articel.cat_id = cat.cat_id')->field('articel.art_id,articel.art_name,cat.cat_name,articel.pinglun,articel.art_time')->order('art_id desc')->select();
        $this->assign('list',$arts);
        $this->display();
    }
}
