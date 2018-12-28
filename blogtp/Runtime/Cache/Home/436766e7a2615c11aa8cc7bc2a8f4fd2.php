<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>风中追风的博客</title>
    <link rel="stylesheet" href="/blogtp/Public/css./bootstrap.min.css">
    <style>
    </style>
</head>
<body>
<div class="container">
    <div class="page-header">
        <h1><a href="<?php echo U('home/index/index');?>"><span class="glyphicon glyphicon glyphicon-home" aria-hidden="true"></span></a>&nbsp;风中追风的博客</h1>
        <h5 style="margin-left: 180px">您好,欢迎</h5>
    </div>
    <nav class="navbar ">
        <ul class="nav  nav-pills">
                <li role="presentation" ><a href="<?php echo U('home/index/index');?>">首页</a></li>
                <li role="presentation" class="active"><a href="<?php echo U('home/articel/artlist');?>">博文目录</a></li>
                <li role="presentation"><a href="./ziyuan.html">资源分享</a></li>
                <li role="presentation"><a href="./me.html">关于我</a></li>
        </ul>
    </nav>
    <div class="row">
        <div class="col-md-9">
            <table class="table table-hover">
                <tr class="success">
                    <td>文章</td>
                    <td>栏目</td>
                    <td>评论</td>
                    <td>时间</td>
                </tr>
                <?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
                    <td><a href="<?php echo U('home/articel/index',array('art_id'=>$v['art_id']));?>"><?php echo ($v['art_name']); ?></a></td>
                    <td><?php echo ($v['cat_name']); ?></td>
                    <td><?php echo ($v['pinglun']); ?></td>
                    <td><?php echo (date("Y-m-d H:i:s",$v['art_time'])); ?></td>
                </tr><?php endforeach; endif; ?>
            </table>
            <div class="row text-center">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="col-md-3" >
            <div class="panel panel-primary">
                <div class="panel-heading text-center" id="time">
                    时间:
                </div>
            </div>
            <div class="panel panel-primary" >
                    <div class="panel-heading">
                        技术
                    </div>
                    <ul class="list-group">
                        <?php if(is_array($cat)): foreach($cat as $key=>$v): if($v['fenlei'] == '技术'): ?><a href="#" class="list-group-item"><?php echo ($v['cat_name']); ?><span class="badge"><?php echo ($v['num']); ?></span></a><?php endif; endforeach; endif; ?>
                    </ul>
             </div>
            <div class="panel panel-primary" >
                <div class="panel-heading">
                    胡说八道
                </div>
                <ul class="list-group">
                    <?php if(is_array($cat)): foreach($cat as $key=>$v): if($v['fenlei'] == '杂文'): ?><a href="#" class="list-group-item"><?php echo ($v['cat_name']); ?><span class="badge"><?php echo ($v['num']); ?></span></a><?php endif; endforeach; endif; ?>
                </ul>
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
<script>
    function displayTime(){
        var today = new Date();
        var Y = today.getUTCFullYear();
        var M = today.getUTCMonth()+1;
        var D = today.getUTCDate();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        switch(today.getUTCDay()){
            case 0:var xingqi = '星期日';break;
            case 1:var xingqi = '星期一';break;
            case 2:var xingqi = '星期二';break;
            case 3:var xingqi = '星期三';break;
            case 4:var xingqi = '星期四';break;
            case 5:var xingqi = '星期五';break;
            case 6:var xingqi = '星期六';break;
        }
        h = checkTime(h);
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('time').innerHTML =Y+"-"+M+'-'+D+'&nbsp;&nbsp;&nbsp;&nbsp;'+h+':'+m+':'+s+'&nbsp;&nbsp;&nbsp;&nbsp;'+xingqi;
    }
    function checkTime(i){
        if(i<=9){
            i = '0'+i;
        }
        return i;
    }
    window.onland = setInterval('displayTime()',500);
</script>
</html>