<?php
include("../member/check.php");
//include("../member/check2.php");
include_once("../function.php");
include_once("../class/bonus_class.php");
include_once("../class/member_class.php");

$information=que_select_cl('information',1);
header("Content-Type: text/html;charset=utf-8");
session_start();
$us=GetMemberbyID($_SESSION['ID']);
$ra=getMemberbyID(1);
$_bonus_cl=new bonus_class();
$_ulevel_cl=new ulevel_class();

$uss1=getMemberbyNickName($us['fathername']);
//$uss1=getMemberbyNickName($us['rname']);
if($us['ulevel']<1){
	$uss1=getMemberbyNickName($us['rname']);
}		

//1-2							
$uss2=getMemberbyNickName($uss1['fathername']);
if ($uss2['ulevel']<2){
	$uid = $_bonus_cl->digui ( $uss1['id'],2 );
	if ($uid){
		$uss2=getMemberbyID($uid);
	}else {
		$uss2=getMemberbyID(1);
	}
}

//2-3
$uss3=getMemberbyNickName($uss2['fathername']);
if ($uss3['ulevel']<3){
			$uid = $_bonus_cl->digui ( $uss2['id'],3 );
		
			if ($uid){
				$uss3=getMemberbyID($uid);
			}else{
				$uss3=getMemberbyID(1);
			}
		}
		
	//3-4
$uss4=getMemberbyNickName($uss3['fathername']);
if ($uss4['ulevel']<4){
			$uid = $_bonus_cl->digui ( $uss3['id'],4 );
			if ($uid){
			$uss4=getMemberbyID($uid);
			}else {
				$uss4=getMemberbyID(1);
			}
		}
$uss5=getMemberbyNickName($uss4['fathername']);
if ($uss5['ulevel']<5){
			$uid = $_bonus_cl->digui ( $uss4['id'],5 );
			if ($uid){
			$uss5=getMemberbyID($uid);
			}else {
				$uss5=getMemberbyID(1);
			}
		}
$uss6=getMemberbyNickName($uss5['fathername']);
if ($uss6['ulevel']<6){
			$uid = $_bonus_cl->digui ( $uss5['id'],6 );
			if ($uid){
			$uss6=getMemberbyID($uid);
			}else {
			$uss6=getMemberbyID(1);
			}
		}
$uss7=getMemberbyNickName($uss6['fathername']);
if ($uss7['ulevel']<7){
			$uid = $_bonus_cl->digui ( $uss6['id'],7 );
			if ($uid){
			$uss7=getMemberbyID($uid);
			}else {
			$uss7=getMemberbyID(1);
			}
		}
$uss8=getMemberbyNickName($uss7['fathername']);
if ($uss8['ulevel']<8){
			$uid = $_bonus_cl->digui( $uss7['id'],8 );
			if ($uid){
			$uss8=getMemberbyID($uid);
			}else {
			$uss8=getMemberbyID(1);
			}
		}

		$uss9=getMemberbyNickName($uss8['fathername']);
if ($uss9['ulevel']<9){
			$uid = $_bonus_cl->digui( $uss8['id'],9 );
			if ($uid){
			$uss9=getMemberbyID($uid);
			}else {
			$uss9=getMemberbyID(1);
			}
		}

		$uss10=getMemberbyNickName($uss9['fathername']);
if ($uss10['ulevel']<10){
			$uid = $_bonus_cl->digui( $uss9['id'],10 );
			if ($uid){
			$uss10=getMemberbyID($uid);
			}else {
			$uss10=getMemberbyID(1);
			}
		}


		
if ($_POST['submit']){
	$member_cl=new member_class();
//	if($us['y1']==0){
	if ($sus=GetMemberbyNickname($_POST['nickname']) ){
		$rs=getMemberbyID($sus['reid']);
		if($sus['y1']==0){
		$startdate=strtotime(now());
    	$enddate=strtotime($sus['pdt']);
    	$days=round(($startdate-$enddate)/3600/24);
			if ($sus['ulevel']<$_POST['uplv']){
				$sql="select count(*) from `ulevelup` where uid=".$sus['id']." and issh=0";	//查询后台已确认的会员
				$query = mysql_query($sql);
				$upcount=mysql_fetch_array($query);
					if($upcount[0] >= 1){
						echo "<script language=javascript>alert('该会员的申请尚未通过审核,请耐心等待.');window.location.href='?'</script>";	
					}else{
						$ra=getMemberbyID(1);
						$_bonus_cl=new bonus_class();
							//0-1
					
				         	$uss1=getMemberbyNickName($us['fathername']);
					//		$uss1=getMemberbyNickName($us['rname']);
							if($us['ulevel']<1){
								$uss1=getMemberbyNickName($us['rname']);
							}
					
					//1-2							
							$uss2=getMemberbyNickName($uss1['fathername']);
							if ($uss2['ulevel']<2){
								$uid = $_bonus_cl->digui ( $uss1['id'],2 );
								if ($uid){
									$uss2=getMemberbyID($uid);
								}else {
									$uss2=getMemberbyID(1);
								}
							}
							//2-3
							$uss3=getMemberbyNickName($uss2['fathername']);
							if ($uss3['ulevel']<3){
										$uid = $_bonus_cl->digui ( $uss2['id'],3 );
									
										if ($uid){
											$uss3=getMemberbyID($uid);
										}else{
											$uss3=getMemberbyID(1);
										}
									}
								//3-4
							$uss4=getMemberbyNickName($uss3['fathername']);
							if ($uss4['ulevel']<4){
										$uid = $_bonus_cl->digui ( $uss3['id'],4 );
										if ($uid){
										$uss4=getMemberbyID($uid);
										}else {
											$uss4=getMemberbyID(1);
										}
									}
							$uss5=getMemberbyNickName($uss4['fathername']);
							if ($uss5['ulevel']<5){
										$uid = $_bonus_cl->digui ( $uss4['id'],5 );
										if ($uid){
										$uss5=getMemberbyID($uid);
										}else {
											$uss5=getMemberbyID(1);
										}
									}
							$uss6=getMemberbyNickName($uss5['fathername']);
							if ($uss6['ulevel']<6){
										$uid = $_bonus_cl->digui ( $uss5['id'],6 );
										if ($uid){
										$uss6=getMemberbyID($uid);
										}else {
										$uss6=getMemberbyID(1);
										}
									}
							$uss7=getMemberbyNickName($uss6['fathername']);
							if ($uss7['ulevel']<7){
										$uid = $_bonus_cl->digui ( $uss6['id'],7 );
										if ($uid){
										$uss7=getMemberbyID($uid);
										}else {
										$uss7=getMemberbyID(1);
										}
									}
							$uss8=getMemberbyNickName($uss7['fathername']);
							if ($uss8['ulevel']<8){
										$uid = $_bonus_cl->digui( $uss7['id'],8 );
										if ($uid){
										$uss8=getMemberbyID($uid);
										}else {
										$uss8=getMemberbyID(1);
										}
									}
							$uss9=getMemberbyNickName($uss8['fathername']);
							if ($uss9['ulevel']<9){
										$uid = $_bonus_cl->digui( $uss8['id'],9 );
										if ($uid){
										$uss9=getMemberbyID($uid);
										}else {
										$uss9=getMemberbyID(1);
										}
									}

							$uss10=getMemberbyNickName($uss9['fathername']);
							if ($uss10['ulevel']<10){
										$uid = $_bonus_cl->digui( $uss9['id'],10 );
										if ($uid){
										$uss10=getMemberbyID($uid);
										}else {
										$uss10=getMemberbyID(1);
										}
									}
						
							
					if ($us['ulevel']==0){
							$ulevelup['sid']=$uss1['id'];
							$ulevelup['tel']=$uss1['usertel'];
							$ulevelup['weixin']=$uss1['caifutong'];
							$ulevelup['snickname']=$uss1['nickname'];
							$ulevelup['susername']=$uss1['username'];
					}elseif ($us['ulevel']==1){
							$ulevelup['sid']=$uss2['id'];
							$ulevelup['tel']=$uss2['usertel'];
							$ulevelup['weixin']=$uss2['caifutong'];
							$ulevelup['snickname']=$uss2['nickname'];
							$ulevelup['susername']=$uss2['username'];
					}elseif ($us['ulevel']==2){
							$ulevelup['sid']=$uss3['id'];
							$ulevelup['tel']=$uss3['usertel'];
							$ulevelup['weixin']=$uss3['caifutong'];
							$ulevelup['snickname']=$uss3['nickname'];
							$ulevelup['susername']=$uss3['username'];
					}elseif ($us['ulevel']==3){
							$ulevelup['sid']=$uss4['id'];
							$ulevelup['tel']=$uss4['usertel'];
							$ulevelup['weixin']=$uss4['caifutong'];
							$ulevelup['snickname']=$uss4['nickname'];
							$ulevelup['susername']=$uss4['username'];
					}elseif ($us['ulevel']==4){
							$ulevelup['sid']=$uss5['id'];
							$ulevelup['tel']=$uss5['usertel'];
							$ulevelup['weixin']=$uss5['caifutong'];
							$ulevelup['snickname']=$uss5['nickname'];
							$ulevelup['susername']=$uss5['username'];
					}elseif ($us['ulevel']==5){
							$ulevelup['sid']=$uss6['id'];
							$ulevelup['tel']=$uss6['usertel'];
							$ulevelup['weixin']=$uss6['caifutong'];
							$ulevelup['snickname']=$uss6['nickname'];
							$ulevelup['susername']=$uss6['username'];
					}elseif ($us['ulevel']==6){
							$ulevelup['sid']=$uss7['id'];
							$ulevelup['tel']=$uss7['usertel'];
							$ulevelup['weixin']=$uss7['caifutong'];
							$ulevelup['snickname']=$uss7['nickname'];
							$ulevelup['susername']=$uss7['username'];
					}elseif ($us['ulevel']==7){
							$ulevelup['sid']=$uss8['id'];
							$ulevelup['tel']=$uss8['usertel'];
							$ulevelup['weixin']=$uss8['caifutong'];
							$ulevelup['snickname']=$uss8['nickname'];
							$ulevelup['susername']=$uss8['username'];
					}elseif ($us['ulevel']==8){
							$ulevelup['sid']=$uss9['id'];
							$ulevelup['tel']=$uss9['usertel'];
							$ulevelup['weixin']=$uss9['caifutong'];
							$ulevelup['snickname']=$uss9['nickname'];
							$ulevelup['susername']=$uss9['username'];
					}elseif ($us['ulevel']==9){
							$ulevelup['sid']=$uss10['id'];
							$ulevelup['tel']=$uss10['usertel'];
							$ulevelup['weixin']=$uss10['caifutong'];
							$ulevelup['snickname']=$uss10['nickname'];
							$ulevelup['susername']=$uss10['username'];
					}
//						if ($rs['ulevel']>=$_POST['uplv']){
						
						$_yul=ulevel($sus['ulevel']);
						$_uul=ulevel($_POST['uplv']);
						$ulevelup['cha']=$_uul['lsk'];
//						if($us['zsq']>=$ulevelup['cha']){
							$ulevelup['uid']=$_SESSION['ID'];
							$ulevelup['nickname']=$us['nickname'];
							$ulevelup['username']=$us['username'];
							$ulevelup['ylevel']=$sus['ulevel'];
							$ulevelup['uplevel']=$_POST['uplv'];
							$ulevelup['bdid']=$us['bdid'];
							$ulevelup['bdname']=$us['bdname'];
//							$ulevelup['sid']=$sus['id'];
//							$ulevelup['snickname']=$sus['nickname'];
//							$ulevelup['susername']=$sus['username'];
							$ulevelup['udate']=now();
							$ulevelup['issh']=0;
							$us_update['pai']=1;
//							$us_update['zsq']=$us['zsq']-$ulevelup['cha'];
//							$us_update['sgb']=$us['sgb']+$ulevelup['cha'];
							add_insert_cl('ulevelup',$ulevelup);
							edit_update_cl('member',$us_update,$us['id']);
							
							$ul=ulevel($_POST['uplv']);
//							$sus_update['ulevel']=$ul['ulevel'];
							$sus_update['lsk']=$ul['lsk'];
							$sus_update['dan']=$ul['dan'];
							$ispay=$sus['ispay'];
							
							edit_update_cl('member',$sus_update,$sus['id']);
							
							$member_cl->addArea($sus['id'],$sus['treeplace'],$ul['dan']-$sus['dan']);
//							if ($_POST['uplv']>=1){
//							echo "<script language=javascript>alert('申请级别错误,该会员的级别已经超过所申请级别.');window.location.href='?'</script>";
							
								
							if ($us['ulevel']==0){
								echo "<script language=javascript>alert('温馨提示：\\n\\n祝贺您申请成功！\\n\\n请与资料显示的上级邀请人联系并汇款后申请升级确认！谢谢。\\n\\n银行：".$uss1['bankname']."\\n开户户名：".$uss1['bankusername']."\\n开户账号：".$uss1['bankcard']."\\n开户地址：".$uss1['bankaddress']."\\n\\n会员编号：".$uss1['nickname']."\\nQQ号码：".$uss1['userqq']."\\n电话：".$uss1['usertel']."\\n支付宝：".$uss1['zhifubao']."\\n微信号：".$uss1['caifutong']."\\n\\n请抄写保存\\n\\n进入等待审核阶段' );window.location.href='?'</script>";
							}elseif ($us['ulevel']==1){
								echo "<script language=javascript>alert('温馨提示：\\n\\n祝贺您申请成功！\\n\\n请与资料显示的上级邀请人联系并汇款后申请升级确认！谢谢。\\n\\n银行：".$uss2['bankname']."\\n开户户名：".$uss2['bankusername']."\\n开户账号：".$uss2['bankcard']."\\n开户地址：".$uss2['bankaddress']."\\n\\n会员编号：".$uss2['nickname']."\\nQQ号码：".$uss2['userqq']."\\n电话：".$uss2['usertel']."\\n支付宝：".$uss2['zhifubao']."\\n微信号：".$uss2['caifutong']."\\n\\n请抄写保存\\n\\n进入等待审核阶段' );window.location.href='?'</script>";
							}elseif ($us['ulevel']==2){
								echo "<script language=javascript>alert('温馨提示：\\n\\n祝贺您申请成功！\\n\\n请与资料显示的上级邀请人联系并汇款后申请升级确认！谢谢。\\n\\n银行：".$uss3['bankname']."\\n开户户名：".$uss3['bankusername']."\\n开户账号：".$uss3['bankcard']."\\n开户地址：".$uss3['bankaddress']."\\n\\n会员编号：".$uss3['nickname']."\\nQQ号码：".$uss3['userqq']."\\n电话：".$uss3['usertel']."\\n支付宝：".$uss3['zhifubao']."\\n微信号：".$uss3['caifutong']."\\n\\n请抄写保存\\n\\n进入等待审核阶段' );window.location.href='?'</script>";
							}elseif ($us['ulevel']==3){
								echo "<script language=javascript>alert('温馨提示：\\n\\n祝贺您申请成功！\\n\\n请与资料显示的上级邀请人联系并汇款后申请升级确认！谢谢。\\n\\n银行：".$uss4['bankname']."\\n开户户名：".$uss4['bankusername']."\\n开户账号：".$uss4['bankcard']."\\n开户地址：".$uss4['bankaddress']."\\n\\n会员编号：".$uss4['nickname']."\\nQQ号码：".$uss4['userqq']."\\n电话：".$uss4['usertel']."\\n支付宝：".$uss4['zhifubao']."\\n微信号：".$uss4['caifutong']."\\n\\n请抄写保存\\n\\n进入等待审核阶段' );alert('------请开通B网-------');window.location.href='?'</script>";
							}elseif ($us['ulevel']==4){
								echo "<script language=javascript>alert('温馨提示：\\n\\n祝贺您申请成功！\\n\\n请与资料显示的上级邀请人联系并汇款后申请升级确认！谢谢。\\n\\n银行：".$uss5['bankname']."\\n开户户名：".$uss5['bankusername']."\\n开户账号：".$uss5['bankcard']."\\n开户地址：".$uss5['bankaddress']."\\n\\n会员编号：".$uss5['nickname']."\\nQQ号码：".$uss5['userqq']."\\n电话：".$uss5['usertel']."\\n支付宝：".$uss5['zhifubao']."\\n微信号：".$uss5['caifutong']."\\n\\n请抄写保存\\n\\n进入等待审核阶段' );window.location.href='?'</script>";
							}elseif ($us['ulevel']==5){
								echo "<script language=javascript>alert('温馨提示：\\n\\n祝贺您申请成功！\\n\\n请与资料显示的上级邀请人联系并汇款后申请升级确认！谢谢。\\n\\n银行：".$uss6['bankname']."\\n开户户名：".$uss6['bankusername']."\\n开户账号：".$uss6['bankcard']."\\n开户地址：".$uss6['bankaddress']."\\n\\n会员编号：".$uss6['nickname']."\\nQQ号码：".$uss6['userqq']."\\n电话：".$uss6['usertel']."\\n支付宝：".$uss6['zhifubao']."\\n微信号：".$uss6['caifutong']."\\n\\n请抄写保存\\n\\n进入等待审核阶段' );window.location.href='?'</script>";
							}elseif ($us['ulevel']==6){
								echo "<script language=javascript>alert('温馨提示：\\n\\n祝贺您申请成功！\\n\\n请与资料显示的上级邀请人联系并汇款后申请升级确认！谢谢。\\n\\n银行：".$uss7['bankname']."\\n开户户名：".$uss7['bankusername']."\\n开户账号：".$uss7['bankcard']."\\n开户地址：".$uss7['bankaddress']."\\n\\n会员编号：".$uss7['nickname']."\\nQQ号码：".$uss7['userqq']."\\n电话：".$uss7['usertel']."\\n支付宝：".$uss7['zhifubao']."\\n微信号：".$uss7['caifutong']."\\n\\n请抄写保存\\n\\n进入等待审核阶段' );window.location.href='?'</script>";
							}elseif ($us['ulevel']==7){
								echo "<script language=javascript>alert('温馨提示：\\n\\n祝贺您申请成功！\\n\\n请与资料显示的上级邀请人联系并汇款后申请升级确认！谢谢。\\n\\n银行：".$uss8['bankname']."\\n开户户名：".$uss8['bankusername']."\\n开户账号：".$uss8['bankcard']."\\n开户地址：".$uss8['bankaddress']."\\n\\n会员编号：".$uss8['nickname']."\\nQQ号码：".$uss8['userqq']."\\n电话：".$uss8['usertel']."\\n支付宝：".$uss8['zhifubao']."\\n微信号：".$uss8['caifutong']."\\n\\n请抄写保存\\n\\n进入等待审核阶段' );window.location.href='?'</script>";
							}elseif ($us['ulevel']==8){
								echo "<script language=javascript>alert('温馨提示：\\n\\n祝贺您申请成功！\\n\\n请与资料显示的上级邀请人联系并汇款后申请升级确认！谢谢。\\n\\n银行：".$uss8['bankname']."\\n开户户名：".$uss8['bankusername']."\\n开户账号：".$uss8['bankcard']."\\n开户地址：".$uss8['bankaddress']."\\n\\n会员编号：".$uss8['nickname']."\\nQQ号码：".$uss8['userqq']."\\n电话：".$uss8['usertel']."\\n支付宝：".$uss8['zhifubao']."\\n微信号：".$uss8['caifutong']."\\n\\n请抄写保存\\n\\n进入等待审核阶段' );window.location.href='?'</script>";
							}elseif ($us['ulevel']==9){
								echo "<script language=javascript>alert('温馨提示：\\n\\n祝贺您申请成功！\\n\\n请与资料显示的上级邀请人联系并汇款后申请升级确认！谢谢。\\n\\n银行：".$uss9['bankname']."\\n开户户名：".$uss9['bankusername']."\\n开户账号：".$uss9['bankcard']."\\n开户地址：".$uss9['bankaddress']."\\n\\n会员编号：".$uss9['nickname']."\\nQQ号码：".$uss9['userqq']."\\n电话：".$uss9['usertel']."\\n支付宝：".$uss9['zhifubao']."\\n微信号：".$uss9['caifutong']."\\n\\n请抄写保存\\n\\n进入等待审核阶段' );window.location.href='?'</script>";
							}
//							echo "<script language=javascript>alert('温馨提示：\\n\\n祝贺您申请成功！\\n\\n请与资料显示的上级邀请人联系并汇款后申请升级确认！谢谢。\\n\\n银行：".$us['bankname']."\\n开户户名：".$us['bankusername']."\\n开户账号：".$us['bankcard']."\\n开户地址：".$us['bankaddress']."\\n\\n会员编号：".$us['nickname']."\\nQQ号码：".$us['userqq']."\\n电话：".$us['usertel']."\\n\\n请抄写保存\\n\\n进入等待审核阶段' );window.location.href='?'</script>";	
//							}
//						}else{
//							echo "<script language=javascript>alert('您的积分余额不足.');window.location.href='?'</script>";	
//						}
//				}else {
//					echo "<script language=javascript>alert('申请级别错误,该会员的级别已经超过所申请级别.');window.location.href='?'</script>";	
//				}
				
			}
				
				
			}else{
				echo "<script language=javascript>alert('申请级别错误,该会员的级别已经超过所申请级别.');window.location.href='?'</script>";		
			}
		
	}else{
		echo "<script language=javascript>alert('不能重复升级,请确认后重新输入.');window.location.href='?'</script>";	
	}
	}else{
		echo "<script language=javascript>alert('该会员不存在,请确认后重新输入.');window.location.href='?'</script>";	
	}
	
	
}
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
<div class="container"><img src="./img/top.jpg" alt="" class="hidden-phone carousel-inner img-responsive img-rounded" /></div>
<div class="navbar container">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand visible-phone" href="./">乐游城会员管理系统</a>
      <div class="nav-collapse">
        <ul class="nav pull-left">
          <li><a href="./" >首页</a></li>
          <li><a href="xitonggonggao.php">系统公告</a></li>
          <li><a href="xiexin.php">站内通信</a></li>
           <li><a href="Orders.php">收货记录</a></li>
          <li><a href="wentijieda.php">问题解答</a></li>
          <li><a href="youxiguize.php">制度规则</a></li>
          <li><a href="kaitongxiaji.php">审核状况</a></li>
          <li><a href="tuijianhuiyuanguanli.php">推荐会员管理</a></li>
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
            <marquee onMouseOver="this.stop()" onMouseOut="this.start()" scrollamount="1" scrolldelay="60" direction="up" align="middle" height="139">
            <tr>
            <td><img style=" width:100px;height:100px; " src="img/gsewm.jpg"/></td>
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
			<?php
			$member = getMemberbyID($_SESSION['ID']);
			//var_dump($_SESSION['ID']);
			$ul = ulevel($member['ulevel']);
			?>
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
            <h3 style="text-align:center;">开通B网</h3>
          </div>
          <!-- /widget-header -->
          <div class="widget-content2 text-center"> <?php if($member['ulevel']==3){echo '请快速联系您的推荐人:'.$member['rname'];}else{echo '无消息';} ?> </div>
          <!-- /widget-content -->
        </div>
        <!-- /widget -->
      </div>
      <div class="span9" >
	  
	  <div class="widget">
                    
                   
           <div class="page-header">
            <h1>会员升级</h1>
          </div>
          
<div class="table-overflow">     
<form name="form1" method="post" action="?" onSubmit="return CheckForm();">


<table class="table table-bordered table-striped table-hover table-condensed">

<tr style="display: none"> 
  <td align="center" colspan="2" height="20"><b>您的4个上层分别为：</b></td>
  
  </tr>
	<tr style="display: none">
  <td align="right">上1层:</td>
  <td><?=$uss1['nickname']?></td>
  </tr>
  <tr style="display: none">
  <td align="right">上2层:</td>
  <td><?=$uss2['nickname']?></td>
  </tr>
  	<tr style="display: none">
  <td align="right">上3层:</td>
  <td><?=$uss3['nickname']?></td>
  </tr>
  	<tr style="display: none">
  <td align="right">上4层:</td>
  <td><?=$uss4['nickname']?></td>
</tr>
  
  
<thead>

<tr>
    <td colspan="10" align="center"><p class="text-center"><strong>升级说明</strong></p></td>
</tr>
    <?php $_ulevel=new ulevel_class();
    $ul=$_ulevel->getulevelbyulevel($us['ulevel']);?>
  <tr>
  <td align="right"  colspan="10">
  <p class="text-center">您目前的级别为:<font color="#FF0000"><?php if ($ul['ulevel']){?>
  <?=$ul['lvname']?>
  <?php }else {?>
   零级会员
  <?php }?> </font></p>  
  </td>
  </tr>

<tr>
    <td colspan="10" align="center"><p class="text-center">下一级将升级为：<select name="uplv" id="uplv">
      <?php 
    		session_start();
    		$ulevel = $us['ulevel'];
    		$sql = "select * from ulevel where ulevel = $ulevel+1";
    		$result = mysql_query($sql);
    		while ($row = mysql_fetch_assoc($result)){?>
    		<option value='<?=$row['ulevel']?>'><?=$row['lvname']?></option>
    	<?php } ?>
      </select></p></td>
</tr>  
  
  <tr style="display: none">
  <td align="right">升级会员编号:</td>
  <td><input name="nickname" id="nickname" type="text"  value="<?php echo $us['nickname']?> " readonly/>
    </td>
  </tr>
  

  
  
<tr>

<?php if ($us['ulevel']==0){?>
    <td colspan="10" align="center"><p class="text-center">并需要向上层会员：<b><font color=red><?=$uss1['nickname']?></font></b>，交升级款<b><font color=red><?php $_iul=$_ulevel_cl->getulevelbyulevel($us['ulevel']+1);echo $_iul['lsk'];?></font></b>元。</p></td>
    <?php }elseif ($us['ulevel']==1){?>
      <td colspan="10" align="center"><p class="text-center">并需要向上层会员：<b><font color=red><?=$uss2['nickname']?></font></b>，交升级款<b><font color=red><?php $_iul=$_ulevel_cl->getulevelbyulevel($us['ulevel']+1);echo $_iul['lsk'];?></font></b>元。</p></td>
       <?php }elseif ($us['ulevel']==2){?>
       <td colspan="10" align="center"><p class="text-center">并需要向上层会员：<b><font color=red><?=$uss3['nickname']?></font></b>，交升级款<b><font color=red><?php $_iul=$_ulevel_cl->getulevelbyulevel($us['ulevel']+1);echo $_iul['lsk'];?></font></b>元。</p></td>
       <?php }elseif ($us['ulevel']==3){?>
       <td colspan="10" align="center"><p class="text-center">并需要向上层会员：<b><font color=red><?=$uss4['nickname']?></font></b>，交升级款<b><font color=red><?php $_iul=$_ulevel_cl->getulevelbyulevel($us['ulevel']+1);echo $_iul['lsk'];?></font></b>元。</p></td>
       <?php }elseif ($us['ulevel']==4){?>
      <td colspan="10" align="center"><p class="text-center">并需要向上层会员：<b><font color=red><?=$uss5['nickname']?></font></b>，交升级款<b><font color=red><?php $_iul=$_ulevel_cl->getulevelbyulevel($us['ulevel']+1);echo $_iul['lsk'];?></font></b>元。</p></td>
       <?php }elseif ($us['ulevel']==5){?>
       <td colspan="10" align="center"><p class="text-center">并需要向上层会员：<b><font color=red><?=$uss6['nickname']?></font></b>，交升级款<b><font color=red><?php $_iul=$_ulevel_cl->getulevelbyulevel($us['ulevel']+1);echo $_iul['lsk'];?></font></b>元。</p></td>
       <?php }elseif ($us['ulevel']==6){?>
       <td colspan="10" align="center"><p class="text-center">并需要向上层会员：<b><font color=red><?=$uss7['nickname']?></font></b>，交升级款<b><font color=red><?php $_iul=$_ulevel_cl->getulevelbyulevel($us['ulevel']+1);echo $_iul['lsk'];?></font></b>元。</p></td>
       <?php }elseif ($us['ulevel']==7){?>
      <td colspan="10" align="center"><p class="text-center">并需要向上层会员：<b><font color=red><?=$uss8['nickname']?></font></b>，交升级款<b><font color=red><?php $_iul=$_ulevel_cl->getulevelbyulevel($us['ulevel']+1);echo $_iul['lsk'];?></font></b>元。</p></td>
       <?php }elseif ($us['ulevel']==8){?>
       <td colspan="10" align="center"><p class="text-center">并需要向上层会员：<b><font color=red><?=$uss9['nickname']?></font></b>，交升级款<b><font color=red><?php $_iul=$_ulevel_cl->getulevelbyulevel($us['ulevel']+1);echo $_iul['lsk'];?></font></b>元。</p></td>
       <?php }elseif ($us['ulevel']==9){?>
      <td colspan="10" align="center"><p class="text-center">并需要向上层会员：<b><font color=red><?=$uss10['nickname']?></font></b>，交升级款<b><font color=red><?php $_iul=$_ulevel_cl->getulevelbyulevel($us['ulevel']+1);echo $_iul['lsk'];?></font></b>元。</p></td>
       <?php }?>
                 
 </tr>

        <tr>
          <td colspan="10"><p class="text-center"><input name="submit" id="submit" type="submit" class="btn" value="申 请 升 级" onClick="window.location.href='?'"></p></td>
        </tr>



</thead>


</thead>
<tr>
<th height="20" colspan="10" align="center"> <p class="text-center">申 请 记 录</p></th>
</tr>

<style>
 .juzhonga th { 
	text-align: center; 
}
 .juzhonga2 td { 
	text-align: center; 
}
</style>

<tr class="juzhonga">
     	
        <th align="center">申请人编号</th>
        <th align="center">申请人昵称</th>
        <th align="center">原级别</th>
        <th align="center">申请级别</th>
<!--        <th align="center">补单金额</th>-->
        <th align="center">申请时间</th>
        <th align="center">审批人编号</th>
      	<th style="display: none" align="center">上层收款人姓名</th>
      	<th align="center">审批人联系电话</th>
      	<th  align="center">审批人微信号</th>
        <th  align="center">审核状态</th>
        <th  align="center">确认时间</th>
    </tr>
</thead>
    
      <?php
	  	$pagesize = 10; //设置每页记录数 
	  	$sql = "SELECT * FROM `ulevelup` WHERE uid=".$_SESSION['ID']." or sid=".$_SESSION['ID']."";
		if($query = mysql_query($sql)){
	  		$sum = mysql_num_rows($query); //计算总记录数 
		}else{
			$sum=0;	
		} 
		if($sum % $pagesize == 0) //计算总页数 
			$total = (int)($sum/$pagesize); 
		else 
			$total = (int)($sum/$pagesize) + 1; 
			if (isset($_GET['page'])) //获得页码 
			{ 
				$p = (int)$_GET['page'];
			} 
			else 
			{ 
				$p = 1;
			}
			if ($p>$total){
				$p=$total;	
			}
		$start = $pagesize * ($p - 1); //计算起始记录 
      	$sql = "SELECT * FROM `ulevelup` WHERE uid=".$_SESSION['ID']." or sid=".$_SESSION['ID']." order by id desc limit ".$start.",".$pagesize;
		if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
			$yul=ulevel($row['ylevel']);
			$uul=ulevel($row['uplevel']);
	  ?>
      
<tr class="juzhonga2">
        
        <td align="center"><?=$row['nickname']?></td>
        <td align="center"><?=$row['username']?></td>
         <?php if ($yul['ulevel']){?>
        <td align="center"><?=$yul['lvname']?></td>
        <?php }else{?>
         <td align="center">零级会员</td>
        <?php }?>
        <td align="center"><?=$uul['lvname']?></td>
<!--        <td align="center"><?=$row['cha']?></td>-->
        <td align="center"><?=$row['udate']?></td>
        <td align="center"><?=$row['snickname']?></td>
        <td style="display: none" align="center"><?=$row['susername']?></td>
        <td align="center"><?=$row['tel']?></td>
        <td  align="center"><?=$row['weixin']?></td>
        <td   align="center"><?php if ($row['issh']==1 && $row['issh2']==1){echo '通过审核';}elseif($row['issh']==1 && $row['issh2']==0){echo '<font color="#FF0000">前台未审核</font>';}elseif($row['issh']==0 && $row['issh2']==1){echo '<font color="#FF0000">后台未审核</font>';}else{echo '未审核';}?></td>
                <td align="center"><?=$row['rdate']?></td>
      </tr>
      <?php
			}
		}
	  ?>


            <td align="right" colspan="10"><?php echo fenye($p,$pagesize,$sum,$total,$cx)?></td>
          </tr>
</table>
</form>
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
<script src="./js/charts/bar.js"></script>
</body>
</html>
