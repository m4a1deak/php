<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends Controller {
    public $gm;
    public function __construct(){
        parent::__construct();
        $this->gm=D('goods');
    }
    public function goodsadd(){
        if(IS_POST){
            if(!$this->gm->create($_POST)){
                echo $this->gm->getError();
                exit;
            }
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize = 3145728 ;// 设置附件上传大小
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath = './Upload/'; // 设置附件上传根目录
            $upload->savePath = ''; // 设置附件上传（子）目录
            // 上传文件
            $info = $upload->upload();
            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
            }else{// 上传成功
                //print_r($info);
               // $this->success('上传成功！');
                //更改文件路径名在数据库中
                $img_path1='./Upload/'.$info['goods_img']['savepath'];
                $img_path2=$info['goods_img']['savename'];
                //开始缩略图
                $image = new \Think\Image();
                $image->open($img_path1.$img_path2);
                $img_xiao = './Upload/thumb/'.$img_path2;
                $image->thumb(230,230)->save($img_xiao);
                $this->gm->thumb_img = $img_xiao;
                $this->gm->goods_img = $img_path1.$img_path2;
            }
            //上步已经传值了 所以add里不用写了
            echo $this->gm->add()?'1':'0';
            //var_dump($_POST);
        }
        $this->display();
    }
    public function goodslist(){

        $p = I('p')?I('p'):1;
        // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $list = $this->gm->order('goods_id')->page($p.',5')->select();
        print_r($list);
        $this->assign('list',$list);// 赋值数据集
        $count = $this->gm->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数
        $show = $Page->show();// 分页显示输出
        // var_dump($show);
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板


        // $this->assign('list',$this->gm->select());
        // $this->display();
    }
    public function goodsdel(){
        $this->gm->delete(I('get.goods_id'));
        //不管你删没删都给我跳转
        $this->redirect('admin/goods/goodslist');

    }
    public function goodsedit(){
        $this->assign('list',$this->gm->find(I('get.goods_id')));
        $goods_id=I('goods_id');
        if($this->gm->where('goods_id='.$goods_id)->save($_POST)){
            $this->redirect('admin/goods/goodslist');
        }
        $this->display();
    }
}