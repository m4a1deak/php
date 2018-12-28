<?php
namespace Admin\Controller;
use \Think\Controller;
class ArticelController extends Controller{
    public $am;
    public function __construct(){
        parent::__construct();
        $this->am = D('articel');
    }
    public function artadd(){
        if(IS_POST){
            if(!$this->am->create()){
                $this->error($this->am->getError(),'',1);
            }
            $id = I('post.cat_id');
            $this->am->art_name = I('post.art_name');
            $this->am->art_connect = I('post.content');
            $this->am->cat_id = $id;
            if($_FILES['fengmian']['error'] === 0){
                $upload = new \Think\Upload();
                $upload->exts = array('jpg','gif','png');
                $upload->rootPath = './upload/fengmian/';
                $info = $upload->upload();
                $fengmian = $upload->rootPath . $info['fengmian']['savepath'].$info['fengmian']['savename'];
                $this->am->fengmian = substr($fengmian,1);
                if(!$info){
                    echo $upload->getError();
                }
                $image = new \Think\Image();
                $image->open($fengmian);
                $thumbimage = $upload->rootPath . $info['fengmian']['savepath'].'thumb'.$info['fengmian']['savename'];
                $image->thumb(498.750,224.297)->save($thumbimage);
                $this->am->thumb = substr($thumbimage,1);
            }else{
                $this->error('未上传封面','',1);
            }
            if($this->am->add()){
                $num = D('cat')->where("cat_id='$id'")->find();
                $data['num'] = $num['num']+1;
                D('cat')->data($data)->where("cat_id='$id'")->save();
                $this->success('发布成功',__CONTROLLER__.'/artlist',1);
            }else{
                $this->error('发布失败','',1);
            }
        }
        $cat = D('cat');
        $cat = $cat->field('cat_id,cat_name')->select();
        $this->assign('cat',$cat);
        $this->display();
    }
    public function artlist(){
        $this->assign('list',$this->am->join('left join cat on articel.cat_id = cat.cat_id')->order('art_id desc')->select());
        $this->display();
    }
    public function artupd(){
        if(IS_POST){
            $d = I('post.art_id');
            $this->am->art_name = I('post.art_name');
            $this->am->art_connect = I('post.content');
            $this->am->cat_id = I('post.cat_id');
            if(!$this->am->create()){
                $this->error($this->am->getError(),'',1);
            }
            if($this->am->where("art_id='$d'")->save()){
                $this->success('修改成功',__CONTROLLER__.'/artlist',1);
            }else{
                $this->error('修改失败','',1);
            }
        }
        $id = I('get.art_id');
        $cat = $this->am->join('left join cat on articel.cat_id = cat.cat_id')->field('cat.num,cat.cat_id')->where("articel.art_id='$id'")->select();
        $cat = D('cat')->field('cat_id,cat_name')->select();
        $art = $this->am->join('left join cat on articel.cat_id = cat.cat_id')->where("articel.art_id='$id'")->find();
        $this->assign('cat',$cat);
        $this->assign('art',$art);
        $this->display();
        //htmlspecialchars_decode
    }
    public function artdel(){
        $id = I('get.art_id');
        $cat = $this->am->join('left join cat on articel.cat_id = cat.cat_id')->field('cat.num,cat.cat_id')->where("articel.art_id='$id'")->find();
        if($this->am->delete($id)){
            $data['num'] = $cat['num']-1;
            $cat_id = $cat['cat_id'];
            if(D('cat')->data($data)->where("cat_id='$cat_id'")->save()){
                $this->success('删除成功',__CONTROLLER__.'/artlist',1);
            }else{
                echo 111;
            }
        }else{
            echo 111;
        }
    }
}
