<?php
include("../member/check.php");
include("../member/check2.php");
include_once("../function.php");

header("Content-Type: text/html;charset=utf-8");
session_start();
$us=que_select_cl('member',$_SESSION['ID']);
if ($_POST['submit']){
	if ($sus=getMemberbyNickName($_POST['snickname'])){
		$mail['uid']=$us['id'];
		$mail['nickname']=$us['nickname'];
		$mail['sid']=$sus['id'];
		$mail['snickname']=$sus['nickname'];
		$mail['title']=$_POST['title'];
		$mail['mailcontent']=$_POST['mailcontent'];
		$mail['fdate']=now();
		echo add_insert_cl('mail',$mail);
		echo "<script language=javascript>alert('邮件发送成功.');window.location.href='?'</script>";	
	}else{
			echo "<script language=javascript>alert('该会员不存在,请确认后重新填写');window.location.href='?'</script>";	
	}
}
$member = getMemberbyID($_SESSION['ID']);
//var_dump($_SESSION['ID']);
$ul = ulevel($member['ulevel']);
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
<SCRIPT LANGUAGE=javascript>
<!--
function SelectAll() {
	for (var i=0;i<document.form1.UID.length;i++) {
		var e=document.form1.UID[i];
		e.checked=!e.checked;
	}
}
-->
</script>
<script src="./js/Apple_Js.js"></script>
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php include 'header.php';?>
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
            <marquee onMouseOver="this.stop()" onMouseOut="this.start()" scrollamount="1" scrolldelay="60" direction="up" align="middle" height="139">
           <tr>
			<td valign="top" ><?=$information['company']?><p></p></td>
			</tr>
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
              <dd>正式会员</dd>
              <dt>会员级别：</dt>
              <dd><?php echo $ul['lvname'];?></dd>
			  <?php 
				$sql="select * from member where ppath like '%{$member['ppath']}%'";
				if($query=mysql_query($sql)){
					$num=mysql_num_rows($query);
				}
			?>
              <dt>团队会员数：</dt>
              <dd><?php echo $num-1;?></dd>
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
               <li style=" margin-left:-1px; border-right:1px #8d8e12 dashed;"><a href="shenqingshengji.php">申请升级</a></li>
              <li><a href="tuanduijiegou.php">团队结构</a></li>
              <li style=" margin-left:-1px; border-right:1px #8d8e12 dashed;"><a href="kaitongxiaji.php">开通下级</a></li>
              <li><a href="xiugaiziliao.php">修改资料</a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <!-- /widget-content -->
        </div>
        <!-- /widget -->
        <div class="widget">
          <div class="widget-header2">
            <h3 style="text-align:center;">团队状态</h3>
          </div>
          <!-- /widget-header -->
          <div class="widget-content2 text-center"> 暂无升级信息 </div>
          <!-- /widget-content -->
        </div>
        <!-- /widget -->
      </div>
      <div class="span9" >
	  
	  <div class="widget">
                    

           <div class="page-header">
            <h1>写信</h1>
          </div>

                   <div class="datatable-header">

  <div class="dataTables_filter  no-append">
  
  <div class="btn-group">
  <!-- <input type="submit" name="Submit" value="发送邮件" class="btn"> -->
  <!-- <input class="btn" type="button" onClick='window.open("xiexin.php")'  name="Submit" value="写 信">
  <input class="btn" type="button" onClick='window.open("shoujianxiang.php")'  name="Submit" value="收件箱">
  <input class="btn" type="button" onClick='window.open("fajianxiang.php")' name="Submit" value="发件箱"> -->
  <input class="btn" type="button" onClick="Apple_url_a1()"  name="Submit" value="写 信">
  <input class="btn" type="button" onClick="Apple_url_a2()" name="Submit" value="收件箱">
  <input class="btn" type="button" onClick="Apple_url_a3()" name="Submit" value="发件箱">

</div>



  </div>

                                    
                                    

</div>                  
                           
                        
<div class="widget-content">
								
								
								
								<div class="tabbable">
	
						
						<br>
						
							<div class="tab-content">
								<div class="tab-pane active" id="1">
							
<form name="form1" method="post" action="?" onSubmit="return CheckForm();">
<table  width="90%" height="350" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
  <tr>
    <td width="90" height="22" align="right">收信会员：</td>
    <td align="left"><input name="snickname" type="text" id="snickname" size="20" maxlength="20" value="<?=$_GET['nickname']?>">
      <input name="lx" type="radio" id="lx" value="1" checked onClick="lxClick(1)">
      会员
      <input type="radio" name="lx" id="lx" value="2" onClick="lxClick(2)">
      管理员</td>
  </tr>
  <tr>
    <td height="22" align="right">信件标题：</td>
    <td align="left"><input name="title" type="text" id="title" size="20" maxlength="50"></td>
  </tr>
  <tr>
    <td height="22" align="right" valign="top">内容：</td>
    <td align="left">
	<textarea id="mailcontent" name="mailcontent" class="xheditor-simple" rows="12" cols="80" style="width: 70%">
	</textarea></td>
  </tr>
</table>
<table align="center">
        <tr>
          <td><input name="submit" id="submit" type="submit" class="button_green" value="发  送" onclick="javascript:return confirm('您确认要发送站内信吗？');"></td>
        </tr>
      </table>
</form>
								</div>
								
								
								
							</div>
						  
						  
						</div>
								
								
								

                        
                    </div>
                        
                        
                        

                    
                    
                </div>	  

      </div>
      <!-- /span9 -->
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<!-- /content -->
<?php include 'footer.php';?>
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
<script src="./js/charts/bar.js"></script>
</body>
</html>