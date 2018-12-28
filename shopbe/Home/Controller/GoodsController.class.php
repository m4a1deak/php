<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller{
    public function comment(){
        if(IS_POST){
            $_POST['pubtime'] = time();
            $commentModel = D('comment');
            if(!$commentModel->create()){
                echo $commentModel->getError();exit;
            }
            if($commentModel->add()){
                $this->success('评论成功','',2);
            }else{
                $this->error("评论失败",'',2);
            }
            //var_dump($_POST);
        }



    }

    public function goods(){
        $goods = D('Admin/goods');
        $goodsinfo=$goods->find(I('get.goods_id'));

        $commentinfo = $goods->relationGet('comment');
        print_r($commentinfo);
        exit();
        //$commentinfo = D('comment')->where(array('goods_id'=>I('goods_id')))->select();


        $this->assign('mbx',$this->mbx($goodsinfo['cat_id']));
        $this->assign('comment',$commentinfo);
        print_r($commentinfo);
        $this->assign('goodsinfo',$goodsinfo);

        //把商品信息写入历史记录session
        $this->history($goods->find(I('get.goods_id')));

        //print_r(array_reverse(session('history'),true));
        //print_r(session('history'));
        //print_r(array_reverse(session('history'),true));
       //$this->assign('history',array_reverse(session('history'),true));//反转后键值不会翻转 加第二个参数 保持原来键值
        $this->display();
    }


    public function history($g){
        if( $g === null){
            exit;
        }
        $history = session('history');
        if(empty($history)){
            $history = array();
        }
        if(isset($history[$g['goods_id']])){
            unset($history[$g['goods_id']]);
        }
        $row=array();
        $row['thumb_img']=$g['thumb_img'];
        $row['goods_name']=$g['goods_name'];
        $row['shop_price']=$g['shop_price'];
        $history[$g['goods_id']]=$row;
        if(count($history)>5){
            $key = key($history);
            unset($history[$key]);
        }
        session('history',$history);
    }


    public function gwc(){
        $goodsinfo = D('Admin/Goods')->find(I('get.goods_id'));
       // print_r($goodsinfo);
        $tool = \Home\Tool\AddTool::getIns();
        $tool->add($goodsinfo['goods_id'],$goodsinfo['goods_name'],$goodsinfo['shop_price'],$goodsinfo['market_price']);
       // print_r(session('kache'));
    }








    public function mbx($cat_id){
        $catModel = D('Admin/Cat');
        $fm = array();
        while($cat_id > 0 ){
            foreach($catModel->select() as $k=>$v){
                if($cat_id == $v['cat_id']){
                    $fm[]=$v;
                    $cat_id = $v['parent_id'];
                    break;
                }
            }
        }
        //翻转数组
        return array_reverse($fm);
    }
}

?>
