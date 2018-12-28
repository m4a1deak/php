<?php
namespace Home\Model;
use \Think\Model;
class UserModel extends Model{
    public $_validate = array(
         array('username','3,9','长度不符','1','length','3'),
        array('email','email','邮箱格式可能不正确','1','','3'),
        array('password','6,18','密码长度不合适','1','length','3'),
        array('repwd','password','两次密码不一致','1','confirm','3'),
        array('username','','用户名重复','1','unique','3')
    );
}

?>
