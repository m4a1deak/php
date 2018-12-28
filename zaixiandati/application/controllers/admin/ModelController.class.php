<?php
class ModelController extends Controller{
    public function indexAction(){
        $list = new CategoryModel('ti');
        $where = ""; //查询条件
        $this->library("Page");
        $total = $list->total($where);
        $pagesize = 10;
        $current = isset($_GET['page']) ? $_GET['page'] : 1;
        $offset = ( $current - 1 ) * $pagesize;
        $a = $list->getPageBrands($offset,$pagesize);
        $page = new Page($total,$pagesize,$current,"index.php",array("p"=>"admin","c"=>"Model","a"=>"index"));
        $pageinfo = $page->showPage();
        include CUR_VIEW_PATH."list.html";
}
    public function addAction(){
        include CUR_VIEW_PATH."add.html";
    }
    public function insertAction()
    {
        $data['ti_content']= trim($_POST['content']);
        $data['ti_daan']= trim($_POST['daan']);
        $data['ti_xueke']= $_POST['xueke'];
        $data['zhendaan']= $_POST['zhendaan'];
        $data['is_show']= $_POST['is_show'];
        $this->helper('input');
        $data=danyinhao($data);
        $data=deepspecialchars($data);
        if (empty($data['ti_content'])) {
            $this->jump('index.php?p=admin&c=index&a=idnex', '内容不能为空');
        }
        $category=new CategoryModel('ti');
        if($category->insert($data)){
            $this->jump('index.php?p=admin&c=index&a=index', '添加成功',1);
        }else{
            $this->jump('index.php?p=admin&c=index&a=index', '添加失败',1);
        }
    }
    public function updateAction(){
        $ti_id=$_GET['ti_id']+0;
        $tiModel = new CategoryModel('ti');
        $s = $tiModel->get1($ti_id);
        var_dump($s);
        include CUR_VIEW_PATH."update.html";
    }
    public function deleteAction(){
        $ti_id=$_GET['ti_id']+0;
        $tiModel = new CategoryModel('ti');
        if($tiModel->delete($ti_id)){
            $this->jump('index.php?p=admin&c=model&a=index','删除试题成功',1);
        }else{
            $this->jump('index.php?p=admin&c=model&a=index','删除试题失败',1);
        }
    }

}