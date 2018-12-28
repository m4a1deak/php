<?php
//后台商品属性管理
class AttributeController extends Controller{
    //显示属性
    public function indexAction(){
        $type_id=isset($_GET['type_id'])?$_GET['type_id']:0;
        $typeModel=new TypeModel('goods_type');
        $types = $typeModel->getTypes();
        $attrtModel=new AttributeModel('attribute');
        //var_dump($attrs);
        //var_dump($types);
        //分页显示
        $pagesize = 3;
        $current = isset($_GET['page'])?$_GET['page']:1;
        $offset = ($current-1)*$pagesize;
        //$attrs = $attrtModel->getAttrs($type_id);
        $attrs = $attrtModel->getPageAttrs($type_id,$offset,$pagesize);
        $this->library('Page');
        if($type_id==0){
            $where = "";
        }else{
            $where = "type_id=$type_id";
        }
        $total=$attrtModel->total($where);
        $page = new Page($total,$pagesize,$current,'index.php',array('p'=>'admin','c'=>'attribute','a'=>'index','type_id'=>$type_id));
        $pageinfo=$page->showPage();
        include CUR_VIEW_PATH."attribute_list.html";
}
    //显示添加属性页面
    public function addAction(){
        //获取所有商品类型
        $typeModel=new TypeModel('goods_type');
        $types = $typeModel->getTypes();
        include CUR_VIEW_PATH."attribute_add.html";
    }
    //属性入库操作
    public function insertAction()
    {
        //收集表单数据 以关联数组形式收集
        $data['attr_name']=trim($_POST['attr_name']);
        $data['attr_type']=$_POST['attr_type'];
        $data['attr_input_type']=$_POST['attr_input_type'];
        $data['type_id']=$_POST['type_id'];
        $data['attr_value']=isset($_POST['attr_value'])?trim($_POST['attr_value']):"";
        //处理和验证
        if(empty($data['attr_name'])){
            $this->jump('index.php?p=admin&c=attribute&a=add','属性名不为空',1);
        }
        if( $data['type_id']==0){
            $this->jump('index.php?p=admin&c=attribute&a=add','要选择正确类型',1);
        }
        //转义
        $this->helper('input');
        $data=deepspecialchars($data);
        $data=danyinhao($data);
        //调用模型完成入库操作并作出提示
        $attrModel = new AttributeModel('attribute');
        if($attrModel->insert($data)){
            $this->jump('index.php?p=admin&c=attribute&a=index&type_id='.$data['type_id'],'添加属性成功',1);
        }else{
            $this->jump('index.php?p=admin&c=attribute&a=add','添加属性失败',1);
        }
    }
    //显示编辑属性页面
    public function editAction(){
        include CUR_VIEW_PATH."attribute_edit.html";
    }
    //属性更新操作
    public function updateAction(){
    }
    //属性删除操作
    public function deleteAction(){
    }
    //获取指定类型下的属性
    public function getAttrsAction(){
        $type_id=$_GET['type_id']+0;
        //调用模型完成具体操作
        $attrModel = new AttributeModel('attribute');
        $a = $attrModel->getAttrsTable($type_id);
        echo $a;
        //echo $type_id;



    }

}