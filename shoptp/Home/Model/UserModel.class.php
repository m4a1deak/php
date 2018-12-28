<?php
namespace Home\Model;
use \Think\Model;
class UserModel extends Model{
    //批处理验证
    protected $patchValidate = true;
    //设置验证规则
    protected $_validate = array(
        //字段名称 验证规则 错误提示 [验证条件 附加规则 验证时间]
        array('username','require','用户名不能为空'),
        array('password','require','密码不能为空'),
        array('password2','password','两次密码不一样',1,'confirm',3),
        array('user_email','email','邮箱格式不对'),
        array('user_qq','number','不是数字'),
        array('user_qq','5,12','长度不符',1,'length'),
        array('user_xueli','1,2,3,4,5','学历不在范围内',1,'in'),
        //通过当前模型类的check_hobby方法验证
        array('user_hobby','check_hobby','至少选择两个爱好',1,'callback'),

    );
    public function check_hobby($arr){
        if(count($arr)<2){
            return false;
        }
        return true;
    }

}

?>
