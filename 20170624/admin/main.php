<?php
session_start();
include("admin_check.php");
if($_SESSION['zq1']==0){$zq1="style='display:none'";}
if($_SESSION['zq2']==0){$zq2="style='display:none'";}
if($_SESSION['zq3']==0){$zq3="style='display:none'";}
if($_SESSION['zq4']==0){$zq4="style='display:none'";}
if($_SESSION['zq5']==0){$zq5="style='display:none'";}
if($_SESSION['zq6']==0){$zq6="style='display:none'";}
if($_SESSION['zq7']==0){$zq7="style='display:none'";}
if($_SESSION['zq8']==0){$zq8="style='display:none'";}
if($_SESSION['zq9']==0){$zq9="style='display:none'";}
if($_SESSION['zq10']==0){$zq10="style='display:none'";}
if($_SESSION['q1']==0){$q1="style='display:none'";}
if($_SESSION['q2']==0){$q2="style='display:none'";}
if($_SESSION['q3']==0){$q3="style='display:none'";}
if($_SESSION['q4']==0){$q4="style='display:none'";}
if($_SESSION['q5']==0){$q5="style='display:none'";}
if($_SESSION['q6']==0){$q6="style='display:none'";}
if($_SESSION['q7']==0){$q7="style='display:none'";}
if($_SESSION['q8']==0){$q8="style='display:none'";}
if($_SESSION['q9']==0){$q9="style='display:none'";}
if($_SESSION['q10']==0){$q10="style='display:none'";}
if($_SESSION['q11']==0){$q11="style='display:none'";}
if($_SESSION['q12']==0){$q12="style='display:none'";}
if($_SESSION['q13']==0){$q13="style='display:none'";}
if($_SESSION['q14']==0){$q14="style='display:none'";}
if($_SESSION['q15']==0){$q15="style='display:none'";}
if($_SESSION['q16']==0){$q16="style='display:none'";}
if($_SESSION['q17']==0){$q17="style='display:none'";}
if($_SESSION['q18']==0){$q18="style='display:none'";}
if($_SESSION['q19']==0){$q19="style='display:none'";}
if($_SESSION['q20']==0){$q20="style='display:none'";}
if($_SESSION['q21']==0){$q21="style='display:none'";}
if($_SESSION['q22']==0){$q22="style='display:none'";}
if($_SESSION['q23']==0){$q23="style='display:none'";}
if($_SESSION['q24']==0){$q24="style='display:none'";}
if($_SESSION['q25']==0){$q25="style='display:none'";}
if($_SESSION['q26']==0){$q26="style='display:none'";}
if($_SESSION['q27']==0){$q27="style='display:none'";}
if($_SESSION['q28']==0){$q28="style='display:none'";}
if($_SESSION['q29']==0){$q29="style='display:none'";}
if($_SESSION['q30']==0){$q30="style='display:none'";}
if($_SESSION['q31']==0){$q31="style='display:none'";}
if($_SESSION['q32']==0){$q32="style='display:none'";}
if($_SESSION['q33']==0){$q33="style='display:none'";}
if($_SESSION['q34']==0){$q34="style='display:none'";}
if($_SESSION['q35']==0){$q35="style='display:none'";}



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>乐游城会员管理系统</title>

<!--                       CSS                       -->
<!-- Reset Stylesheet -->
<link rel="stylesheet" href="resources/css/reset.css" type="text/css" media="screen" />
<!-- Main Stylesheet -->
<link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />
<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
<link rel="stylesheet" href="resources/css/invalid.css" type="text/css" media="screen" />
<!--                       Javascripts                       -->
<!-- jQuery -->
<script type="text/javascript" src="resources/scripts/jquery-1.3.2.min.js"></script>
<!-- jQuery Configuration -->
<script type="text/javascript" src="resources/scripts/simpla.jquery.configuration.js"></script>
<!-- Facebox jQuery Plugin -->
<script type="text/javascript" src="resources/scripts/facebox.js"></script>
<!-- jQuery WYSIWYG Plugin -->
<script type="text/javascript" src="resources/scripts/jquery.wysiwyg.js"></script>

<script language="javascript">

<!--
function SetUrl(url,para)
{
	parent.iframepage.location.href = url+"?yemian="+para;
}
function iFrameHeight() {
var ifm= document.getElementById("iframepage");
var subWeb = document.frames ? document.frames["iframepage"].document : ifm.contentDocument;
if(ifm != null && subWeb != null) {
ifm.height = subWeb.body.scrollHeight;
}
}
-->

</script>
<script language="JavaScript">
<!-- Hide
function killErrors() {
return true;
}
window.onerror =killErrors;
// -->
</script>
</head>
<body>
<div id="body-wrapper">
  <!-- Wrapper for the radial gradient background -->
  <div id="sidebar">
    <div id="sidebar-wrapper">
      <!-- Sidebar with logo and menu -->
      <h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>
      <!-- Logo (221px wide) -->
      <a href="#"><img id="logo" src="resources/images/logo.png" alt="Simpla Admin logo" /></a>
      <!-- Sidebar Profile links -->
      <div id="profile-links">
      <br />
      <a href="../index.php" target="_blank">登录前台</a>&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="index.php?action=Quit" title="Sign Out">退出登录</a></div>
      <ul id="main-nav">
        <!-- Accordion Menu -->
        <li> <a href="?" class="nav-top-item no-submenu">
          <!-- Add the class "no-submenu" to menu items with no sub menu -->
          首页 </a> </li>
        <li <?=$zq1?>> <a href="#" class="nav-top-item">
          <!-- Add the class "current" to current menu item -->
          会员管理</a>
          <ul>
            <li <?=$q1?>><a href="#"  onclick="javascript:SetUrl('admin_jihuo.php')" >激活会员</a></li>
            <li <?=$q2?>><a href="#" onclick="javascript:SetUrl('admin_member.php')">正式会员</a></li>
            <li <?=$q3?>><a href="#" onclick="javascript:SetUrl('admin_fwzx.php')">服务中心</a></li>
            
           
           <li <?=$q4?>><a href="#" onclick="javascript:SetUrl('admin_ulevelup2.php')">会员复消</a></li>
           <li <?=$q4?>><a href="#" onclick="javascript:SetUrl('admin_ulevelup.php')">会员升级</a></li>
           <li <?=$q5?>><a href="#" onclick="javascript:SetUrl('admin_action.php')">操作记录</a></li>
           <!-- 
           <li <?=$q7?>><a href="#" onclick="javascript:SetUrl('admin_member2.php')">会员前台</a></li>
            -->
            
           
          </ul>
        </li>
        <li  <?=$zq2?>> <a href="#" class="nav-top-item"> 财务管理 </a>
          <ul>
<!--               <li <?=$q6?>><a href="#" onclick="javascript:SetUrl('admin_gongzi.php')">员工工资</a></li>
<li <?=$q7?>><a href="#" onclick="javascript:SetUrl('admin_jiesuan.php')">日结周发</a></li>
                  
 
            
            <li <?=$q6?>><a href="#" onclick="javascript:SetUrl('admin_jiesuan1.php')">晋级奖</a></li>
             -->
            <li <?=$q7?>><a href="#" onclick="javascript:SetUrl('admin_jiesuan4.php')">福利奖</a></li>
           
            <li <?=$q8?>><a href="#" onclick="javascript:SetUrl('admin_jiesuan3.php')">回本奖</a></li>
           
            <li <?=$q9?>><a href="#" onclick="javascript:SetUrl('admin_tixian.php')">提现管理</a></li>
            <li <?=$q10?>><a href="#" onclick="javascript:SetUrl('admin_chongzhi.php')">充值管理</a></li>
            <!-- 
            <li <?=$q11?>><a href="#" onclick="javascript:SetUrl('admin_huikuan.php')">汇款通知</a></li>
             -->
            <li <?=$q12?>><a href="#" onclick="javascript:SetUrl('admin_zhuanzhang.php')">转账记录</a></li>
            <li <?=$q13?>><a href="#" onclick="javascript:SetUrl('admin_zhuanhuan.php')">转换记录</a></li>
            <?php if(1==2){?>
<!--            <li <?=$q8?>><a href="#" onclick="javascript:SetUrl('admin_baodan.php')">报单记录</a></li>-->
            <?php }?>
          </ul>
        </li>
         <li  <?=$zq3?>> <a href="#" class="nav-top-item">数据统计</a>
          <ul>
            <li <?=$q14?>><a href="javascript:SetUrl('admin_bonustime.php')">奖金总表</a></li>
            <li <?=$q15?>><a href="javascript:SetUrl('admin_bonuslaiyuan.php')">奖金明细</a></li>
            <li <?=$q16?>><a href="javascript:SetUrl('admin_Systemview.php')">会员统计</a></li>
            <!--<li <?=$q10?>><a href="javascript:SetUrl('map/index.php')">会员分布</a></li>-->
<!--            <li <?=$q17?>><a href="javascript:SetUrl('admin_aixinjijin.php')">爱心基金</a></li>-->
            <li <?=$q18?>><a href="javascript:SetUrl('admin_Systemview2.php')">收支统计</a></li>
            <li <?=$q19?>><a href="javascript:SetUrl('admin_yeji.php')">业绩统计</a></li>
            <li <?=$q20?>><a href="javascript:SetUrl('admin_jiangjinup.php')">数据排行</a></li>
          </ul>
          </li>
         <li  <?=$zq4?>> <a href="#" class="nav-top-item">商城管理 </a>
          <ul>
            <!--  
            <li <?=$q21?>><a href="#" onclick="javascript:SetUrl('admin_goodsadd2.php')">商品积分</a></li>
            -->
            <li <?=$q21?>><a href="#" onclick="javascript:SetUrl('admin_goodsadd.php')">添加商品</a></li>
            <li <?=$q22?>><a href="#" onclick="javascript:SetUrl('admin_goodslist.php')">商品管理</a></li>
            <!-- 
            <li <?=$q22?>><a href="#" onclick="javascript:SetUrl('admin_Orders2.php')">报单订单查询</a></li>
             -->
            
            <li <?=$q22?>><a href="#" onclick="javascript:SetUrl('admin_Orders22.php')">购物订单查询</a></li>
             <!-- 
             <li <?=$q23?>><a href="#" onclick="javascript:SetUrl('admin_Orders.php')">报单订单管理</a></li> 
             -->
          
            <li <?=$q23?>><a href="#" onclick="javascript:SetUrl('admin_Orders1.php')">购物订单管理</a></li> 
            <!--  
            <li <?=$q23?>><a href="#" onclick="javascript:SetUrl('../member/goodslist3.php')">发货管理</a></li>
            -->
          </ul>
        </li>
        <li <?=$zq5?>> <a href="#" class="nav-top-item">信息管理</a>
          <ul>
            <li <?=$q24?>><a href="#" onclick="javascript:SetUrl('admin_newsadd.php')">系统公告</a></li>
            <li <?=$q25?>><a href="#" onclick="javascript:SetUrl('admin_newsmanage.php')">公告管理</a></li>
            <li <?=$q26?>><a href="#" onclick="javascript:SetUrl('admin_mail.php')">站内短信</a></li>
            <!--<li><a href="#" onclick="javascript:SetUrl('admin_sendemail.php')">发送邮件</a></li>-->
            <li <?=$q27?>><a href="#" onclick="javascript:SetUrl('admin_introduced.php')">问题解答</a></li>
            <li <?=$q28?>><a href="#" onclick="javascript:SetUrl('admin_rules.php')">游戏规则</a></li>
            <li <?=$q17?>><a href="#" onclick="javascript:SetUrl('admin_hkzh.php')">汇款账户</a></li>
            <li <?=$q29?>><a href="#" onclick="javascript:SetUrl('admin_company.php')">公告栏</a></li>
          </ul>
        </li>
        <li <?=$zq6?>> <a href="#" class="nav-top-item"> 系统设置 </a>
          <ul>
            <li <?=$q30?>><a href="#" onclick="javascript:SetUrl('admin_ulevel.php')">会员设置</a></li>
            <li <?=$q31?>><a href="#" onclick="javascript:SetUrl('admin_parameters.php')">系统参数</a></li>
            <!--  
            <li <?=$q32?>><a href="#" onclick="javascript:SetUrl('admin_email.php')">电子邮件</a></li>
            -->
            <li <?php if($_SESSION['adminid']!=1){?> style="display:none" <?php }?>><a href="#" onclick="javascript:SetUrl('admin_Administrator.php')">权限管理</a></li>
          </ul>
        </li>
        <li <?=$zq7?>> <a href="#" class="nav-top-item"> 数据管理 </a>
          <ul>
           <li <?=$q33?>><a href="#" onclick="javascript:SetUrl('../databack/index.php')">数据备份</a></li>
<!--            <li <?=$q34?>><a href="#" onclick="javascript:SetUrl('huanyuan.php')">数据自动备份</a></li>-->
            
            <li <?=$q35?>><a href="#" onclick="javascript:SetUrl('admin_delete.php')">清空数据</a></li>
          </ul>
        </li>
        
      </ul>
      
      <!-- End #main-nav -->
      <div id="messages" style="display: none">
        <!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->
        <h3>3 Messages</h3>
        <p> <strong>17th May 2009</strong> by Admin<br />
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. <small><a href="#" class="remove-link" title="Remove message">Remove</a></small> </p>
        <p> <strong>2nd May 2009</strong> by Jane Doe<br />
          Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est. <small><a href="#" class="remove-link" title="Remove message">Remove</a></small> </p>
        <p> <strong>25th April 2009</strong> by Admin<br />
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. <small><a href="#" class="remove-link" title="Remove message">Remove</a></small> </p>
        <form action="#" method="post">
          <h4>New Message</h4>
          <fieldset>
          <textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
          </fieldset>
          <fieldset>
          <select name="dropdown" class="small-input">
            <option value="option1">Send to...</option>
            <option value="option2">Everyone</option>
            <option value="option3">Admin</option>
            <option value="option4">Jane Doe</option>
          </select>
          <input class="button" type="submit" value="Send" />
          </fieldset>
        </form>
      </div>
      <!-- End #messages -->
    </div>
  </div>
  <!-- End #sidebar -->
  <div id="main-content">
  <div align="center">
  <?php if ($_SESSION['to_admin'] ==admin){?>
  <a style="display:none"  href="#" onclick="javascript:SetUrl('admin_huikuan.php')">汇款通知</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <a style="display:none" href="#" onclick="javascript:SetUrl('admin_Orders.php')">订单管理</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <a style="display:none" href="#" onclick="javascript:SetUrl('admin_tixian.php')">提现管理</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <a  style="display:none"href="javascript:SetUrl('admin_bonustime.php')">奖金查询</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <a style="display:none" href="#" onclick="javascript:SetUrl('admin_chongzhi.php')">充值管理</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <a style="display:none" href="#" onclick="javascript:SetUrl('admin_fwzx.php')">服务中心</a></div>
   <?php }?>
  <iframe src="admin_system.php" id="iframepage" name="iframepage" frameBorder=0 scrolling=auto width="100%" height="800px" onLoad="javascript:iFrameHeight();" ></iframe>
    <div id="footer" align="right"> <small>
      <!-- Remove this notice or replace it with whatever you want -->
      <a href="#"></a> </small> </div>
    <!-- End #footer -->
  </div>
  <!-- End #main-content -->
</div>
</body>
<!-- Download From www.exet.tk-->
</html>
