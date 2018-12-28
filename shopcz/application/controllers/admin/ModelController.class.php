<?php
//后台商品分类管理
class CategoryController extends Controller{
    //显示分类
    public function indexAction(){
        include CUR_VIEW_PATH."cat_list.html";
}
    //显示添加分类页面
    public function addAction(){
        include CUR_VIEW_PATH."cat_add.html";
    }
    //分类入库操作
    public function insertAction()
    {
        //收集表单数据 以关联数组形式收集
        //处理和验证
        //调用模型完成入库操作并作出提示
    }
    //显示编辑分类页面
    public function editAction(){
        include CUR_VIEW_PATH."cat_edit.html";
    }
    //分类更新操作
    public function updateAction(){
    }
    //分类删除操作
    public function deleteAction(){
    }

}