<?php
include("check.php");
include_once("../function.php");
session_start();
$_yid=$_GET["yid"];
//如果输入过2级密码就不需要再输入
if ($_SESSION['pass2'] == 1){
	echo "<script language=javascript>window.location.href='".$_yid."'</script>";	
}
//验证二级密码
if($_POST['submit']){
	if (checkPassword2($_SESSION['nickname'],$_POST['password2'])){
		$_SESSION['pass2']=1;

		echo "<script language=javascript>window.location.href='".$_yid."'</script>";

	}else{
		echo "<script language=javascript>alert('二级密码错误,请重新输入.');window.location.href='?yid=".$_yid."'</script>";
	}
}
$member = getMemberbyID($_SESSION['ID']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>乐游城会员管理系统</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<link href="./css/bootstrap.min.css" rel="stylesheet" />
<link href="./css/bootstrap-responsive.min.css" rel="stylesheet" />

<link href="./css/font-awesome.css" rel="stylesheet" />
<link href="./css/adminia.css" rel="stylesheet" />
<link href="./css/adminia-responsive.css" rel="stylesheet" />
<link href="./css/pages/dashboard.css" rel="stylesheet" />

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div class="container"><img src="./img/top5.png" alt="" class="hidden-phone carousel-inner img-responsive img-rounded" /></div>
<div class="navbar container">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand visible-phone" href="./">乐游城会员管理系统</a>
      <div class="nav-collapse">

        <ul class="nav pull-left">
           <li><a href="./" >首页</a></li>
		   
      <li role="presentation" class="dropdown">
        <a id="drop4" href="newr/newslist.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          公司新闻
          <span class="caret"></span>
        </a>
        <ul id="menu1" class="dropdown-menu" aria-labelledby="drop1">
				    <li><a href="test.php?yid=newslist.php">新闻公告</a></li>
					<li><a href="test.php?yid=introduced.php">公司简介</a></li>
        		    <li><a href="test.php?yid=rules.php">奖金制度</a></li> 
						 <!--  
					<li><a href="test.php?yid=company.php">汇款账户</a></li> 
					-->
					<li><a href="test.php?yid=hkzh.php">汇款账户</a></li> 
					
        </ul>
      </li>
	  
      <li role="presentation" class="dropdown">
        <a id="drop4" href="test.php?yid=Personal.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          个人信息
          <span class="caret"></span>
        </a>
        <ul id="menu1" class="dropdown-menu" aria-labelledby="drop2">
					<li><a href="test.php?yid=Personal.php">个人资料</a></li>
					<li><a href="test.php?yid=UpdateProfile.php">修改资料</a></li>
        		    <li><a href="test.php?yid=UpdatePassword.php">修改密码</a></li> 
					<li><a href="test.php?yid=ulevelup2.php">会员复消</a></li>
					<li><a href="test.php?yid=ulevelup.php">会员升级</a></li>
					 
        </ul>
      </li>
	  
	  
      <li role="presentation" class="dropdown">
        <a id="drop4" href="test.php?yid=./" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          市场信息
          <span class="caret"></span>
        </a>
        <ul id="menu1" class="dropdown-menu" aria-labelledby="drop3">
                    <?php if($member['isbd']==2){?>
					<li><a href="test.php?yid=zhuce_biaodan.php">会员注册</a></li>
					<?php }?>
					<li><a href="test.php?yid=TeamInformation.php">直推列表</a></li>
        		 	<li><a href="test.php?yid=treeview.php">推荐结构</a></li> 
        		 	 <?php if($member['isbd']!=2){?>
					 <li ><a href="test.php?yid=tuanduijiegou11.php">网络结构</a></li>
					 <?php }else {?>
					 <li ><a href="test.php?yid=tuanduijiegou1.php">网络结构</a></li>
					 <?php }?>
        </ul>
      </li>
	  
      <li role="presentation" class="dropdown">
        <a id="drop4" href="test.php?yid=./" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          财务管理
          <span class="caret"></span>
        </a>
        <ul id="menu1" class="dropdown-menu" aria-labelledby="drop4">
					 <li><a href="test.php?yid=bonus.php">奖金总表</a></li>
					 <li><a href="test.php?yid=bonuslaiyuan.php">奖金明细</a></li>
        		 	 <li><a href="test.php?yid=tixian.php">奖金提现</a></li> 
		             <li><a href="test.php?yid=chongzhi.php">充值申请</a></li> 
		             <li><a href="test.php?yid=zhuanzhang.php">会员转账</a></li> 
		             <li><a href="test.php?yid=zhuanhuan.php">货币转换</a></li> 
		             <!--  
					
					 <li><a href="test.php?yid=huikuan.php">汇款申请</a></li> 
					 -->
        </ul>
      </li>
	  
      <li role="presentation" class="dropdown">
        <a id="drop4" href="test.php?yid=./" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          商城购物
          <span class="caret"></span>
        </a>
        <ul id="menu1" class="dropdown-menu" aria-labelledby="drop5">
        
					 <li><a href="test.php?yid=goodslist7.php">购物商城</a></li>
					  
		            <!-- 
		             <li><a href="test.php?yid=admin_goodsadd.php">添加商品</a></li>
					 <li><a href="test.php?yid=admin_goodslist.php">商品目录</a></li>
					 <li><a href="test.php?yid=Orderslist.php">订单管理</a></li>
					  -->
					 <li><a href="test.php?yid=Orders.php">我的订单</a></li>
					
        		 	<!-- <li><a href="test.php?yid=kuaidi.php">物流查询</a></li> -->
        </ul>
      </li>
      <li role="presentation" class="dropdown">
        <a id="drop4" href="test.php?yid=./" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          站内短信
          <span class="caret"></span>
        </a>
        <ul id="menu1" class="dropdown-menu" aria-labelledby="drop6">
					<li style="display:none"><a href="test.php?yid=newslist.php">站内短信</a></li>
					<li style="display:none"><a href="test.php?yid=introduced.php">收件箱</a></li>
        		 	<li><a href="test.php?yid=xiexin.php">发件箱</a></li> 
        </ul>
      </li>
      <li role="presentation" class="dropdown">
        <a id="drop4" href="test.php?yid=./" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          服务中心
          <span class="caret"></span>
        </a>
        <ul id="menu1" class="dropdown-menu" aria-labelledby="drop7">
					<li style="display:none"><a href="test.php?yid=sqfwzx.php">申请服务中心</a></li>
					
					<li><a href="test.php?yid=jihuo.php">激活会员</a></li>
        		 	<li><a href="test.php?yid=bdrecord.php">激活记录</a></li> 
        		 	 <?php if($member['isbd']==2){?>
					<li ><a href="test.php?yid=bdmember.php">正式会员</a></li> 
					 <?php }?>
        </ul>
      </li>
        </ul>
        <ul class="nav pull-right">
          <li><a href="../index.php"><i class="icon-off"></i>安全退出</a></li>
        </ul>
      </div>
      <!-- /nav-collapse -->
    </div>
    <!-- /container -->
  </div>
  <!-- /navbar-inner -->
</div>
<!-- /navbar -->
<div id="content">
  <div class="container">
    <div class="row">
      <div class="span3" style=" margin-top:15px;">
        <div class="widget">
           <div class="widget-header2">
            <h3 style="text-align:center;">公告栏</h3>
          </div>
          <!-- /widget-header -->
         <div class="widget-content2" style=" padding:0 10px;">
            <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="1" scrolldelay="60" direction="up" align="middle" height="139">
			<tr>
			<td valign="top" ><?=$information['company']?><p></p></td>
            <!-- <b><span style="width:100%">乐游城会员管理系统</span>
            <p><font 宋体;="" font-size:="" 13px&quot;="">尊敬的RTT会员大家好：</font></p>
            <p>&nbsp;&nbsp; <font 宋体;="" font-size:="" 13px&quot;="">RTT 70系统将于月底将全面完善，通过全面的完善和VIP俱乐部的推动！会让所有会员体验RTT的强大。最近很多谣言请会员不要轻信，RTT一定长长久久。<br>
              &nbsp;&nbsp;&nbsp;<br>
              &nbsp; RTT郑重告知：关注生活第一线的伙伴请退出这个不是我们的平台以防伙伴上当。</font></p>
            <p>声明1:&nbsp;上海团员 野狼 阿鹰 李梦涵 私自开设假网站模仿RTT蒙蔽会员，请看到的会员相互通知！</p>
            <p>声明2:有会员私自收钱280元内部搞钱，请会员认真看在平台的级别，统一把钱打到一个人手里存在资金风险与RTT无关，请相互通知。</p>
            <p>声明3：由四川唐军&nbsp;张贵福 BOSS&nbsp;私自建立假网站搞58元互助蒙蔽会员，请相互转告。</p>
            <p><font 宋体;="" font-size:="" 13px&quot;="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; RTT全民互助平台<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2015年10月7日</font></p>
            </b> -->
            </marquee>
          </div>
          <!-- /widget-content -->
        </div>
        <!-- /widget -->
        <div class="widget">
          <div class="widget-header2">
            <h3 style="text-align:center;">会员资料</h3>
          </div>
          <!-- /widget-header -->
          <div class="widget-content2">
            <dl class="dl-horizontal">
              <dt>会员编号：</dt>
              <dd><?php echo $member['nickname'];?></dd>
              <dt>会员昵称：</dt>
              <dd><?php echo $member['username'];?></dd>
              <dt>会员状态：</dt>
              <dd><?php if($member['ulevel']>=1){echo '正式会员';}else{echo '无';}?></dd>
              
              
            </dl>
          </div>
          <!-- /widget-content -->
        </div>
        <!-- /widget -->
        <div class="widget">
          <div class="widget-header2">
            <h3 style="text-align:center;">会员管理</h3>
          </div>
          <!-- /widget-header -->
          <div class="widget-content2">
            <ul class="index_shengji">
            <li style=" margin-left:-1px; border-right:1px #8d8e12 dashed;"><a href="test.php?yid=huikuan.php">汇款申请</a></li>
              <li><a href="test.php?yid=tuanduijiegou.php">团队结构</a></li>
              <li style=" margin-left:-1px; border-right:1px #8d8e12 dashed;"><a href="test.php?yid=chongzhi.php">充值申请</a></li>
              <li><a href="test.php?yid=xiugaiziliao.php">修改资料</a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <!-- /widget-content -->
        </div>
       
      </div>
      <form name="form1" method="POST" action="?yid=<?=$_yid?>">
<table width="300" border="0" align="center" cellpadding="3" cellspacing="1" class="table1">
  <tr>
    <td align="center" height="50px"><p style=" color:#F00"><B>请输入二级密码：</B>  
      <input name="password2" type="password" id="password2" size="20"></p></td>
    </tr>
  <tr>
    <td align="center"><input name="submit" type="submit" class="button_green" value="确  认"></td>
    </tr>
  </table>
</form>
        </div>
        <!-- /widget -->
      </div>
      <!-- /span9 -->
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<!-- /content -->
<div class="container" id="footer">
  <p>Copyright 2015-2025 乐游城会员管理系统 版权所有</p>
</div>
<!-- /container -->
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="./js/jquery-1.7.2.min.js"></script>
<script src="./js/excanvas.min.js"></script>
<script src="./js/jquery.flot.js"></script>
<script src="./js/jquery.flot.pie.js"></script>
<script src="./js/jquery.flot.orderBars.js"></script>
<script src="./js/jquery.flot.resize.js"></script>
<script src="./js/bootstrap.js"></script>

<script src="../config.php"></script>
</body>
</html>