<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends Controller{
    //列表展示
    public function showlist(){
        //实例化model
        //$goods = new GoodsModel();
        //上边报错
        //$goods = new \Admin\Model\GoodsModel();
        //$goods = D('Goods')->select();
        //$list = D('Goods')->select(9);
        //$list = D('Goods')->select('1,3,9,5,76');
        //$list = D('Goods')->group('goods_brand_id')->field('goods_brand_id,count(*) as num')->select();
        //dump($list);

        /*TP分页
         * $p = I('p')?I('p'):1;
        $count = D('Goods')->count();
        $Page = new \Think\Page($count,5);
        $show =$Page->show();
        $this->assign('page',$show);*/

        //echo \Tools\Page::$name; 可以访问到
        $goodsmodel = D('Goods');
        //工具类分页
        //1 获得总条数 每页显示条数
        $cnt = $goodsmodel->count(); //总条数
        $per = 7;//每页显示条数
        //echo $cnt;
        //2 实例化分页类对象
        $page = new \Tools\Page($cnt,$per);
        //3 制作一条sql语句 获得每页显示的数据
        //$page->limit 分页类根据当前页码把limit偏移量 长度给拼装好并赋值给limit成员属性
        //echo $page->limit;
        $p = I('get.page')?I('get.page'):1;
        $list = $goodsmodel->order('goods_id desc')->limit(($p-1)*$per,$per)->select();

        //$list = $goodsmodel->order('goods_id desc')->select();
        //4 制作页码列表
        $pagelist = $page->fpage();
        //显示页码列表
        $this->assign('pagelist',$pagelist);
        $this->assign('goods',$list);
        //dump($goods);
        //dump($goods->select());
        //特殊表
        $english = D('English');
        //dump($english);
        $this->display();
    }
    //添加商品
    public function tianjia1(){
            $goods = D('Goods');

            //1 数组方式添加数据
            /*$arr = array(
                'goods_name'=>'黑莓手机',
                'goods_price'=>3400,
                'goods_number'=>14,
                'goods_weight'=>104,
            );
            $z = $goods->add($arr);
            dump($z);*/

            //2 面向对象式方法添加
            $goods->goods_name='小米手机';
            $goods->goods_price=3000;
            $goods->goods_weight=109;
            $z=$goods->add();
            dump($z);

            $this->display();
    }
    public function tianjia(){
        if(IS_POST){
            //商品图片的处理
            //1 大图上传
            if($_FILES['goods_pic']['error']===0){
                $upload = new \Think\Upload();
                $upload->rootPath = './Public/Upload/';//根目录
                $z = $upload->upload();//返回信息
                //dump($z);

                $bigPicName = $upload->rootPath.$z['goods_pic']['savepath'].$z['goods_pic']['savename'];
                //dump($bigPicName);
                $arr['goods_big_img'] = substr($bigPicName,1);
                //往数据库里存的时候去掉前面的 .  只往数据库里存的时候去掉
                // 如果在前面就去掉了 缩略图时 就找不到图片所在的目录了
                //2 制作缩略图
                $img = new \Think\Image();
                //打开原图
                $img->open($bigPicName);
                //设置长宽 等比例缩放
                $img->thumb(125,125);
                //保存 缩略图和原图在同一个位置
                $smallPicName = $upload->rootPath.$z['goods_pic']['savepath']."small_".$z['goods_pic']['savename'];
                $img->save($smallPicName);
                $arr['goods_small_img'] =  substr($smallPicName,1);
            }
            $arr['goods_name']=$_POST['goods_name'];
            $arr['goods_price']=$_POST['goods_price'];
            $arr['goods_number']=$_POST['goods_number'];
            $arr['goods_weight']=$_POST['goods_weight'];
            $arr['goods_introduce']=$_POST['goods_introduce'];
            $goods = D('Goods');
            //dump($arr);
            if($goods->add($arr)){
                //$this->redirect(地址,参数,间隔时间,提示信息);
                //$this->redirect('showlist',array(),1,'添加成功');
                $this->success('添加成功','showlist',1);
            }else{
                $this->success('添加失败','showlist',1);
            }
        }
        $this->display();
    }
    //修改商品
    public function upd1(){
        $goods = D('Goods');
        $goods->goods_name='坚果手机';
        $goods->goods_price=1999;
        $goods->goods_weight=115;
        //tp不允许不加where条件的save修改
        $z = $goods->where('goods_id>=145 and goods_id<=149')->save();
        dump($z);
        $this->display();
    }
    public function upd(){
        $goods_id=I('get.goods_id');
        //dump($goods_id);
        $goodsModel = D('Goods');
        $goods = $goodsModel->find($goods_id);
        //dump($goods);
        $this->assign('goods',$goods);
        //dump($goods_id);
        if(IS_POST){

            //dump(I('post.goods_id'));
            if($goodsModel->where('goods_id='.I('post.goods_id'))->save($_POST)){
                $this->success('修改成功','showlist',1);
            }
        }
        $this->display();
    }
    public function delete(){
        $goods_id=I('get.goods_id');
        $goodsModel = D('Goods');
        if($goodsModel->delete($goods_id)){
            $this->success('删除成功','',1);
        }
    }
}