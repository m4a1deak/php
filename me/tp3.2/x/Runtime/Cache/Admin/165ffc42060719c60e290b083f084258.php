<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="" method="post">
    <p>栏目名称:<input type="text" name="cat_name" id=""></p>
    <p><input type="submit" value="提交"></p>
</form>
<p><a href="<?php echo U('admin/cat/catadd');?>">添加栏目</a>&nbsp;|&nbsp;<a href="<?php echo U('admin/cat/catlist');?>">栏目列表</a></p>
</body>
</html>