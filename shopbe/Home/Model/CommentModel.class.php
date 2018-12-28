<?php
namespace Home\Model;
use Think\Model\RelationModel;
class CommentModel extends RelationModel{
    public $_validate = array(
        array('content','6,200','长度不符','1','length','3'),
    );
}

?>
