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
                <li href="#" class="list-group-item active">栏目管理</li>
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
            <form action="<?php echo U('admin/articel/artadd');?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    栏目名 <input type="text" name="art_name" id="">
                </div>
                <div class="row">
                    上传封面 <input type="file" name="fengmian" id="">
                </div>
                <div class="row">
                    <script id="container" name="content" type="text/plain"></script>
                </div>
                <select  name='cat_id'  style="margin-top: 35px">
                    <?php if(is_array($cat)): foreach($cat as $key=>$v): ?><option value="<?php echo ($v['cat_id']); ?>"><?php echo ($v['cat_name']); ?></option><?php endforeach; endif; ?>
                </select>
                <div class="row">
                    <input type="submit" value="提交">
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="well text-center">
            风中追风... &copy; 2017年
        </div>
    </div>
</div>
</body>
<script type="text/javascript" src="/blogtp/Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/blogtp/Public/ueditor/ueditor.all.js"></script>
<script type="text/javascript">
    var ue = UE.getEditor('container');
</script>
</html>