<?php
namespace Home\Controller;
use \Think\Controller;
class OderController extends Controller{
    public function checkout(){
        $kache = session('kache');
        $tool = \Home\Tool\AddTool::getIns();
        $this->assign('zj',$tool->calcMoney());
        //print_r(session('kache'));
        $this->assign('kache',$kache);
        $this->display();
    }
    public function done(){
        $this->display();
    }
}
?>
