<?php
//后台商品分类管理
class CategoryController extends BaseController{
    //显示分类
    public function indexAction(){
        //获取所有分类
        $catgoryModel = new CategoryModel('category');
        //$cats=$catgoryModel->getCats();
        //$catgoryModel->gettree();
        $cats=$catgoryModel->gettree();
        //print_r($cats);
        //载入视图
        include CUR_VIEW_PATH."cat_list.html";
}
    //显示添加分类页面
    public function addAction(){
        //获取所有分类
        $catgoryModel = new CategoryModel('category');
        $cats=$catgoryModel->gettree();
        //print_r($cats);
        include CUR_VIEW_PATH."cat_add.html";
    }
    //分类入库操作
    public function insertAction(){
        if(!empty($_POST)) {
            //收集表单数据 以关联数组形式收集
            $data['cat_name'] = trim($_POST['cat_name']);//名称
            $data['parent_id'] = $_POST['parent_id'];//上级ID
            $data['unit'] = trim($_POST['unit']);//数量
            $data['sort_order'] = trim($_POST['sort_order']);//排序
            $data['is_show'] = trim($_POST['is_show']);//是否展示
            $data['cat_desc'] = trim($_POST['cat_desc']);//商品描述
            //实体转义
            $this->helper('input');
            $data=danyinhao($data);
            $data=deepspecialchars($data);
            //处理和验证
            if (empty($data['cat_name'])) {
                $this->jump('index.php?p=admin&c=categroy&a=add', '分类名称不能为空');
        }
            //print_r($data);
            //exit;
            //调用模型完成入库操作并作出提示
            $category=new CategoryModel('category');
            if($category->insert($data)){
                $this->jump('index.php?p=admin&c=category&a=index', '添加成功',1);
            }else{
                $this->jump('index.php?p=admin&c=category&a=add', '添加失败',1);
            }
        }
    }
    //显示编辑分类页面
    public function editAction(){
        //获取cat_id
        $cat_id=$_GET['cat_id']+0;
        $categoryModel=new CategoryModel('category');
        $cats=$categoryModel->gettree();
        $cat=$categoryModel->selectByPk($cat_id);
        //print_r($cats);
        //print_r($cat);
        include CUR_VIEW_PATH."cat_edit.html";
    }
    //分类更新操作
    public function updateAction(){
        //收集表单数据
        $data['cat_id']=$_POST['cat_id'];//更新的条件
        $data['cat_name'] = trim($_POST['cat_name']);//名称
        $data['parent_id'] = $_POST['parent_id'];//上级ID
        $data['cat_desc'] = trim($_POST['cat_desc']);//商品描述
        $data['sort_order'] = trim($_POST['sort_order']);//排序
        $data['unit'] = trim($_POST['unit']);//数量
        $data['is_show'] = trim($_POST['is_show']);//是否展示
        //验证和处理
        if (empty($data['cat_name'])) {
            $this->jump('index.php?p=admin&c=categroy&a=add', '分类名称不能为空');
        }
        //调用模型完成更新并给出提示
        //不能让当前分类或当前分类的后代分类作为其上级分类
        $catgoryModel = new CategoryModel('category');
        if(in_array($data['parent_id'],$catgoryModel->getSubIds($data['cat_id']))){
            $this->jump('index.php?p=admin&c=category&a=index', '不以当前分类或当前分类的后代分类作为其上级分类',1);
            //echo '不以当前分类或当前分类的后代分类作为其上级分类';
        }
        //var_dump($data['parent_id']);
        // print_r($catgoryModel->getSubIds($data['cat_id']));
        //exit;
        if($catgoryModel->update($data)){
            $this->jump('index.php?p=admin&c=category&a=index','修改分类成功',1);
        }else{
            $this->jump('index.php?p=admin&c=category&a=index','修改分类失败',1);
        }
    }
    //分类删除操作
    public function deleteAction(){
        $cat_id=$_GET['cat_id']+0;//隐式的将其转换成整型 避免get恶意攻击
        $catgoryModel = new CategoryModel('category');
        //判断分类是否还有子分类
        if(count($catgoryModel->getSubIds($cat_id))>1){
            $this->jump('index.php?p=admin&c=category&a=index','该分类下还有子分类',1);
        }
        //开始删除
        if($catgoryModel->delete($cat_id)){
            $this->jump('index.php?p=admin&c=category&a=index','删除分类成功',1);
        }else{
            $this->jump('index.php?p=admin&c=category&a=index','删除分类失败',1);
        }
    }

}