<?php
namespace Admin\Model;
use \Think\Model;
class CatModel extends Model{
    protected $_validate = array(
        //验证字段  验证规则 错误提示 验证条件 附加规则 验证时间
        array('cat_name','require','栏目名不能为空',1,'',3),
    );
    protected $_auto = array(
        //完成字段 完成规则 完成条件 附加条件
        array('cat_time','time',3,'function'),
    );
}
