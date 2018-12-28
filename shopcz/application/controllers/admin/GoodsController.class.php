<?php
//后台商品管理
class GoodsController extends BaseController{
    //显示商品
    public function indexAction(){
        //获取所有分类
        $catgoryModel = new CategoryModel('category');
        $cats=$catgoryModel->gettree();
        //获取所有的品牌
        $brandModel = new BrandModel("brand");
        $brands = $brandModel->getBrands();
        //获取所有商品类型
        $typeModel = new TypeModel('goods_type');
        $types = $typeModel->getTypes();
        //获取所有商品
        $goodsModel = new GoodsModel('goods');
        //$goods = $goodsModel->get
        //print_r($brands);
        //print_r($types);
        //print_r($cats);
        include CUR_VIEW_PATH."goods_list.html";
}
    //显示添加商品页面
    public function addAction(){
        //获取所有分类
        $catgoryModel = new CategoryModel('category');
        $cats=$catgoryModel->gettree();
        //获取所有的品牌
        $brandModel = new BrandModel("brand");
        $brands = $brandModel->getBrands();
        //获取所有商品类型
        $typeModel = new TypeModel('goods_type');
        $types = $typeModel->getTypes();
        //print_r($brands);
        //print_r($types);
        //print_r($cats);
        include CUR_VIEW_PATH."goods_add.html";
    }
    //商品入库操作
    public function insertAction()
    {
        //收集表单数据 以关联数组形式收集
        $data['goods_name']=trim($_POST['goods_name']);
        $data['goods_sn']=trim($_POST['goods_sn']);
        $data['shop_price']=trim($_POST['shop_price']);
        $data['market_price']=trim($_POST['market_price']);
        $data['cat_id']=$_POST['cat_id'];
        $data['brand_id']=$_POST['brand_id'];
        $data['type_id']=$_POST['type_id'];
        $data['promote_start_time']=strtotime($_POST['promote_start_time']);
        $data['promote_end_time']=strtotime($_POST['promote_end_time']);
        $data['goods_desc']=trim($_POST['goods_desc']);
        $data['goods_number']=trim($_POST['goods_number']);
        $data['is_best']=isset($_POST['is_best'])?$_POST['is_best']:0;
        $data['is_hot']=isset($_POST['is_hot'])?$_POST['is_hot']:0;
        $data['is_new']=isset($_POST['is_new'])?$_POST['is_new']:0;
        $data['is_onsale']=isset($_POST['is_onsale'])?$_POST['is_onsale']:0;
        //对上传文件的处理
        //var_dump($_FILES['goods_img']);
        if($_FILES['goods_img']['tmp_name']!==""){
            //有上传
            $this->library('Upload');
            $upload=new Upload();
            if($filename = $upload->up($_FILES['goods_img'])){
                $data['goods_img']=$filename;
            }else{
                $this->jump('index.php?p=admin&c=goods&a=add',$upload->error(),1);

            }
        }
        //处理和验证
        $this->helper('input');
        $data=deepspecialchars($data);
        $data=danyinhao($data);
        //调用模型完成入库操作并作出提示
        $goodsModel=new GoodsModel('goods');
        if($goods_id = $goodsModel->insert($data)){
            if(isset($_POST['attr_id_list'])){
                $ids=$_POST['attr_id_list'];
                $values = $_POST['attr_value_list'];
                $prices = $_POST['attr_prices_list'];
                //批量插入
                print_r($ids);
                print_r($values);
                print_r($prices);
                exit;
                $model = new Model('goods_attr');
                foreach($ids as $k=>$v){
                    $list['goods_id']=$goods_id;
                    $list['attr_id']=$v;
                    $list['attr_value']=$values[$k];
                    $list['attr_price']=$prices[$k];
                    $model->insert($list);
                }
            }
            $this->jump('index.php?p=admin&c=goods&a=add','添加成功',1);
        }else{
            $this->jump('index.php?p=admin&c=goods&a=add','添加失败',1);
        }
    }
    //显示编辑商品页面
    public function editAction(){
        include CUR_VIEW_PATH."goods_edit.html";
    }
    //商品更新操作
    public function updateAction(){
    }
    //商品删除操作
    public function deleteAction(){
    }

}