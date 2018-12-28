<?php
namespace Admin\Controller;
use Think\Controller;
class CatController extends Controller{
    public function catadd(){
        if(IS_POST){
            $cat = D('Cat');
            if(!$cat->create($_POST)){
                echo $cat->getError();
            }else{
                $cat->add();
                $this->redirect('admin/cat/catlist');
            }
        }
        $this->display();
    }
    public function catlist(){
        $cat = D('Cat');
        $arr = $cat->select();
        $this->assign('arr',$arr);
        $this->display();
    }
    public function catedit(){

    }
    public function catdel(){
        $cat = D('Cat');
        if($cat->delete(I('cat_id'))){
            $this->redirect('admin/cat/catlist');
        }

    }
}

?>
