<?php
namespace Admin\Controller;
use Think\Controller;
class CatController extends Controller {
    public function cateadd(){
        if(IS_POST){
            $catModel = D('Cat');
            if($catModel->add($_POST)){
                //提交成功调往上一个页面
                //避免刷新造成的重复提交
                //$ref = $_SERVER['HTTP_REFERER'];
                //header("location:$ref");
                //重定向
                $this->redirect('admin/cat/catelist');
            }
        }
        $this->display();
    }
    public function catelist(){
        $catModel = D('Cat');
        //print_r($catModel->select());
        /*print_r($catModel->gettree());
        exit;*/
        $this->assign('catlist',$catModel->gettree());
        $this->display();
    }
    public function catedit(){
        $catModel = D('Cat');
        if(IS_POST){
            $catModel = D('Cat');
            $cat_id = I('cat_id');
            /*if(empty(I('cat_name'))){
                echo "名称不能为空";
                exit();
            }*/
            echo $catModel->where('cat_id='.$cat_id)->save($_POST)?"好":"不会";
            /*if(){
                //提交成功调往上一个页面
                //避免刷新造成的重复提交
                $ref = $_SERVER['HTTP_REFERER'];
                header("location:$ref");
            }*/
        }
        $this->assign('gettree',$catModel->gettree());
        $this->assign('catinfo',$catModel->find(I('cat_id')));
        $this->display();
    }
    public function catedel(){
            $catModel = D('Cat');
            if($catModel->delete(I('get.cat_id'))){
                $this->redirect('admin/cat/catelist');
            }
    }
}