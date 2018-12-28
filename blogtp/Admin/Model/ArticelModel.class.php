<?php
namespace Admin\Model;
use \Think\Model;
class ArticelModel extends Model{
    protected $_validate = array(
        //验证字段  验证规则 错误提示 验证条件 附加规则 验证时间
        array('art_name','require','文章名不能为空',1,'',3),
        array('content','require','内容不能为空',1,'',3),
        //array('fengmian','require','还没上传封面',1,'',3),
    );
    protected $_auto = array(
        //完成字段 完成规则 完成条件 附加条件
        array('art_time','time',1,'function'),
    );
    public function fengmian1(){

    }
}
