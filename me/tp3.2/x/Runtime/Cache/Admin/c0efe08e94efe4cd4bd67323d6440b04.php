<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="/me/tp3.2/x/Public/admin/css/a.css">
</head>
<body>
<div>
    <table>
        <tr>
            <td>
                栏目名称:
            </td>
            <td>
                创建时间
            </td>
            <td>
                操作
            </td>
        </tr>
        <?php if(is_array($arr)): foreach($arr as $key=>$v): ?><tr>
            <td>
                <?php echo ($v['cat_name']); ?>
            </td>
            <td>
                <?php echo (date("y-m-d h:i:s",$v['time'])); ?>
            </td>
            <td>
                <a href="<?php echo U('admin/cat/catedit',array('cat_id'=>$v[cat_id]));?>">修改</a>
                <a href="<?php echo U('admin/cat/catdel',array('cat_id'=>$v[cat_id]));?>">删除</a>
            </td>
        </tr><?php endforeach; endif; ?>
    </table>
    <p><a href="<?php echo U('admin/cat/catadd');?>">添加栏目</a>&nbsp;|&nbsp;<a href="<?php echo U('admin/cat/catlist');?>">栏目列表</a></p>





</div>
</body>
</html>