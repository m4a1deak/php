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
                <li role="presentation" ><a href=<?php echo U('home/index/index');?>>首页</a></li>
                <li role="presentation"><a href="<?php echo U('home/articel/artlist');?>">博文目录</a></li>
                <li role="presentation"><a href="./ziyuan.html">资源分享</a></li>
                <li role="presentation"><a href="./me.html">关于我</a></li>

        </ul>
    </nav>
    <div class="row" style="border: 3px solid #eee;border-radius: 15px">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="page-header">
                <div class="text-center">
                    <h1><?php echo ($art['art_name']); ?></h1>
                </div>

                <div style="height: 20px;"></div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3"><?php echo (date("Y-m-d H:i:s",$art['art_time'])); ?></div>
                </div>
             </div>
            <div style="height: 20px;"></div>
            <div>
                <?php echo (htmlspecialchars_decode($art['art_connect'])); ?>
            </div>
            <div class="row text-center">

            </div>
        </div>
        <div class="col-md-1" >

        </div>
    </div>
    <div class="panel-heading text-center" id="time">
        时间:
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