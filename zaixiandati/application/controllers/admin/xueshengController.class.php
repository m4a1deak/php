<?php
class xueshengController extends Controller{
    public function indexAction(){
        $x = new UserModel('user');
        $xx = $x->getall();
        include CUR_VIEW_PATH."list2.html";
    }
}

?>
