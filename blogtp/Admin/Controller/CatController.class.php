<?php
namespace Admin\Controller;
use \Think\Controller;
class CatController extends Controller{
    public $cm ;
    public function __construct(){
        parent::__construct();
        $this->cm = D('cat');
    }
    public function catlist(){
        $p = I('p')?I('p'):1;
        $list = $this->cm->where()->order('cat_id desc')->page($p.',7')->select();
        $count = $this->cm->where()->count();
        $Page = new \Think\Page($count,7);
        $show = $Page->show();
        $this->assign('count',$count);
        $this->assign('show',$show);
        $this->assign('list',$list);
        $this->display();
    }
    public function catadd(){
        if(IS_POST){
            $this->cm->cat_name = I('post.cat_name');
            $this->cm->fenlei = I('post.fenlei');
            if(!$this->cm->create()){
                $this->error($this->cm->getError(),'',1);
            }
            if($this->cm->add()){
                $this->success('添加成功',__CONTROLLER__.'/catlist',1);
            }else{
                $this->error('添加失败',__CONTROLLER__.'/catlist',1);
            }
        }
        $pname = $this->cm->select();
        $this->assign('pname',$pname);
        $this->display();
    }
    public function catupd(){
        if(IS_POST){
            $id = I('post.cat_id');
            $data=array(
                'cat_name'=>I('post.cat_name'),
                'pid'=>I('post.pid'),
                'cat_time'=>time(),
                );
            if($this->cm->where("cat_id=$id")->save($data)){
                $this->success('修改成功',__CONTROLLER__.'/catlist',1);
            }else{
                $this->error('修改失败',__CONTROLLER__.'/catlist',1);
            }
        }
        $pname = $this->cm->field('cat_name,cat_id')->where('pid=0')->select();
        $this->assign('pname',$pname);
        $cat_id=I('get.cat_id');
        $upd = $this->cm->find($cat_id);
        $this->assign('upd',$upd);
        $this->display();
    }
    public function catdel(){
        $i = $this->cm->field('num')->where('cat_id='.I('get.cat_id'))->find();
        if($i['num'] == 0){
            if($this->cm->where('cat_id='.I('get.cat_id'))->delete()){
                $this->success('删除成功',__CONTROLLER__.'/catlist',1);
            }else{
                $this->error('删除失败',__CONTROLLER__.'/catlist',1);
            }
        }else{
            $this->error('该栏目下还有文章',__CONTROLLER__.'/catlist',1);
        }
    }
}
