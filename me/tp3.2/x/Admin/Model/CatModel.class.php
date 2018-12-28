<?php
namespace Admin\Model;
use \Think\Model;
class CatModel extends Model{
    protected  $_validate = array(
        array('cat_name','2,8','长度不符合','1','length','3'),
        array('cat_name','','已有的栏目名','1','unique','3'),
    );
    protected $_auto = array(
        array('time','time',3,'function'),
    );

}

?>
