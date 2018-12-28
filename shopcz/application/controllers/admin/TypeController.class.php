<?php
//后台商品类型管理
class TypeController extends Controller{
    //显示类型
    public function indexAction(){
        $typeModel = new TypeModel('goods_type');
        //$types = $typeModel->getTypes();
        $pagesiez = 2;//每页显示的数
        $current = isset($_GET['page'])?$_GET['page']:1; //当前页
        $offset = ($current-1)*$pagesiez; //取哪个
        $types = $typeModel->getPageTypes($offset,$pagesiez);
        print_r($types);
        //获取总的记录数
        $where = "";
        $total = $typeModel->total($where);
        //分页详情
        $this->library('Page');
        $page = new Page($total,$pagesiez,$current,'index.php',array('p'=>'admin','c'=>'type','a'=>'index'));
        $pageinfo=$page->showPage();
        //print_r($types);
        include CUR_VIEW_PATH."goods_type_list.html";
}
    //显示添加类型页面
    public function addAction(){
        include CUR_VIEW_PATH."goods_type_add.html";
    }
    //类型入库操作
    public function insertAction(){
        //收集表单数据 以关联数组形式收集
        $data['type_name']=trim($_POST['type_name']);
        //处理和验证
        if(empty($data['type_name'])){
            $this->jump('index.php?p=admin&c=type&a=add','商品类型不能为空',1);
        }
        //进行转义
        $this->helper('input');
        $data=deepspecialchars($data);
        $data=danyinhao($data);
        //调用模型完成入库操作并作出提示
        $typeModel = new TypeModel('goods_type');
        if($typeModel->insert($data)){
            $this->jump('index.php?p=admin&c=type&a=index','商品类型添加成功',1);
        }else{
            $this->jump('index.php?p=admin&c=type&a=add','商品类型添加失败',1);
        }
    }
    //显示编辑类型页面
    public function editAction(){
        include CUR_VIEW_PATH."goods_type_edit.html";
    }
    //类型更新操作
    public function updateAction(){
    }
    //类型删除操作
    public function deleteAction(){
    }

}