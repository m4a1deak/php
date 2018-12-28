<?php 
$us=getMemberbyID($_SESSION['ID']);
?>
<div class="container"><img src="./img/top5.png" alt="" class="hidden-phone carousel-inner img-responsive img-rounded" /></div>
<div class="navbar container">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand visible-phone" href="./">乐游城会员管理系统</a>
      <div class="nav-collapse">

        <ul class="nav pull-left" role="tablist">

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
                    <?php if($us['isbd']==2){?>
					<li><a href="test.php?yid=zhuce_biaodan.php">会员注册</a></li>
					<?php }?>
					<li><a href="test.php?yid=TeamInformation.php">直推列表</a></li>
        		 	<li><a href="test.php?yid=treeview.php">推荐结构</a></li> 
        		 	 <?php if($us['isbd']!=2){?>
					 <li ><a href="test.php?yid=tuanduijiegou11.php">网络结构</a></li>
					 <?php }else {?>
					 <li ><a href="test.php?yid=tuanduijiegou1.php">网络结构</a></li>
					 <?php }?>
					 <!-- <li ><a href="test.php?yid=tuanduijiegouB.php">网络B图</a></li>
					 <li ><a href="test.php?yid=tuanduijiegouC.php">网络C图</a></li>
					 -->
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
        		 	 <li><a href="test.php?yid=chongzhi.php">充值申请</a></li> 
		             <li><a href="test.php?yid=tixian.php">奖金提现</a></li> 
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
				
					 <li><a href="test.php?yid=Orders.php">我的订单</a></li>
		             <!--  
		             <?php if($us['isbd']==2){?>
		             <li><a href="test.php?yid=admin_goodsadd.php">添加商品</a></li>
					 <li><a href="test.php?yid=admin_goodslist.php">商品目录</a></li>
					 <li><a href="test.php?yid=Orderslist.php">订单详情</a></li>
					 
					 
					 <?php }?>-->
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
                     <?php if($us['isbd']<2){?>
				    	<li ><a href="test.php?yid=sqfwzx.php">申请服务中心</a></li>
					 <?php }?>
					 <li><a href="test.php?yid=jihuo.php">激活会员</a></li>
        		 	 <li><a href="test.php?yid=bdrecord.php">激活记录</a></li> 
        		 	   <?php if($us['id']==1){?>
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
