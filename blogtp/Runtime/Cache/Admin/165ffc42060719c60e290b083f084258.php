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
        <h1><a href="<?php echo U('admin/index/index');?>"><span class="glyphicon glyphicon glyphicon-home" aria-hidden="true"></span></a>&nbsp;添加栏目</h1>
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
            <div class="row">
                <form action="<?php echo U('admin/cat/catadd');?>" method="post">
                <div class="col-md-1"></div>
                <div class="col-md-2"><h3 style="margin-top: 50px">添加栏目:</h3><br><h3>所属分类:</h3>
                </div>
                <div class="col-md-4"><input type="text" class="form-control" placeholder="栏目名称" name='cat_name' style="margin-top: 50px">
                    <select  name='fenlei' class="form-control" style="margin-top: 35px">
                        <option value="技术">技术</option>
                        <option value="杂文">杂文</option>
                        </foreach>
                </select>
                    <button type="submit" class="btn btn-primary btn-lg" style="margin-left: 85px;margin-top: 30px">确认添加</button>
                </div>
                </form>
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