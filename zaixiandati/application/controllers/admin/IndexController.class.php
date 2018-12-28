<?php
//后台首页控制器
class IndexController extends  BaseController{
    public function indexAction(){
        require(CUR_VIEW_PATH .'index.html');
    }
    public function topAction(){
        require(CUR_VIEW_PATH .'top.html');
    }
    public function menuAction(){
        require(CUR_VIEW_PATH .'menu.html');
    }
    public function dragAction(){
        require(CUR_VIEW_PATH .'drag.html');
    }
    public function mainAction(){
        require(CUR_VIEW_PATH .'main.html');
    }
}

?>
