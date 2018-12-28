<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台管理界面</title>
    <link rel="stylesheet" href="/blogtp/Public/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="page-header">
        <h1><a href="<?php echo U('admin/index/index');?>"><span class="glyphicon glyphicon glyphicon-home" aria-hidden="true"></span></a>&nbsp;栏目列表</h1>
    </div>
    <div class="row">
        <div class="col-md-2">
            <div class="list-group">
                <li class="list-group-item active">栏目管理</li>
                <a href="<?php echo U('admin/cat/catlist');?>" class="list-group-item text-center">栏目列表</a>
                <a href="<?php echo U('admin/cat/catadd');?>" class="list-group-item text-center">增加栏目</a>
            </div>
            <div class="list-group">
                <li href="#" class="list-group-item active">文章管理</li>
                <a href="<?php echo U('admin/articel/artlist');?>" class="list-group-item text-center">文章列表</a>
                <a href="<?php echo U('admin/articel/artadd');?>" class="list-group-item text-center">添加文章</a>
            </div>
            <div class="list-group">
                <li href="#" class="list-group-item active">留言管理</li>
                <a href="#" class="list-group-item text-center">留言列表</a>
                <a href="#" class="list-group-item text-center">查看访客</a>
            </div>
            <div class="list-group">
                <a href="#" class="list-group-item active text-center">退出登录</a>
            </div>
        </div>
        <div class="col-md-10">
            <table class="table table-hover table-bordered">
            <tr class="active">
                <td>栏目名称</td>
                <td>创建时间</td>
                <td>文章数</td>
                <td>所属分类</td>
                <td>操作</td>
            </tr>
           <?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
                    <td><?php echo ($v['cat_name']); ?></td>
                    <td><?php echo (date("Y-m-d H:i:s",$v['cat_time'])); ?></td>
                    <td><?php echo ($v['num']); ?></td>
                    <td><?php echo ($v['fenlei']); ?></td>
                    <td><a href="<?php echo U('admin/cat/catupd',array('cat_id'=>$v['cat_id']));?>" class="btn btn-info">编辑</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('admin/cat/catdel',array('cat_id'=>$v['cat_id']));?>" class="btn btn-danger">删除</a></td>
                </tr><?php endforeach; endif; ?>
            </table>
            <div class="row text-center">
                <div class="col-md-1"></div>
                <div class="col-md-3">总计<?php echo ($count); ?>条记录</div>
                <div class="col-md-2" style="font-size: 20px;"><?php echo ($show); ?></div>
                <div class="col-md-6"></div>
            </div>
        </div>
        </div>
    <div class="row">
        <div class="well text-center">
            风中追风... &copy; 2017年
        </div>
    </div>
    </div>


</body>
</html>