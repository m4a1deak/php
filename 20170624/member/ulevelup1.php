<?php
include("check.php");
include("check2.php");
include_once("../function.php");
include_once("../class/bonus_class.php");
include_once("../class/member_class.php");
header("Content-Type: text/html;charset=utf-8");
session_start();
$us=GetMemberbyID($_SESSION['ID']);
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
				$sql="select count(*) from `ulevelup` where sid=".$sus['id']." and issh=0";
				$query = mysql_query($sql);
				$upcount=mysql_fetch_array($query);
					if($upcount[0] >= 1){
						echo "<script language=javascript>alert('该会员的申请尚未通过审核,请耐心等待.');window.location.href='?'</script>";	
					}else{
						$ra=getMemberbyID(1);
					$_bonus_cl=new bonus_class();
							//0-1
					
							$uss1=getMemberbyNickName($us['fathername']);
					
							//1-2							
							$uss2=getMemberbyNickName($uss1['fathername']);
							if ($uss2['ulevel']<2){
								$uid = $_bonus_cl->digui2 ( $us['id'] );
								if ($uid){
									$uss2=getMemberbyID($uid);
								}else {
									$uss2=getMemberbyID(1);
								}
							}
							//2-3
							$uss3=getMemberbyNickName($uss2['fathername']);
							if ($uss3['ulevel']<3){
										$uid = $_bonus_cl->digui3 ( $uss2['id'] );
									
										if ($uid){
											$uss3=getMemberbyID($uid);
										}else{
											$uss3=getMemberbyID(1);
										}
									}
								//3-4
							$uss4=getMemberbyNickName($uss3['fathername']);
							if ($uss4['ulevel']<3){
										$uid = $_bonus_cl->digui4 ( $uss3['id'] );
										if ($uid){
										$uss4=getMemberbyID($uid);
										}else {
											$uss4=getMemberbyID(1);
										}
									}
					
					if ($us['ulevel']==0){
							$ulevelup['sid']=$uss1['id'];
							$ulevelup['snickname']=$uss1['nickname'];
							$ulevelup['susername']=$uss1['username'];
					}elseif ($us['ulevel']==1){
							$ulevelup['sid']=$uss2['id'];
							$ulevelup['snickname']=$uss2['nickname'];
							$ulevelup['susername']=$uss2['username'];
					}elseif ($us['ulevel']==2){
							$ulevelup['sid']=$uss3['id'];
							$ulevelup['snickname']=$uss3['nickname'];
							$ulevelup['susername']=$uss3['username'];
					}elseif ($us['ulevel']==3){
							$ulevelup['sid']=$uss4['id'];
							$ulevelup['snickname']=$uss4['nickname'];
							$ulevelup['susername']=$uss4['username'];
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
								echo "<script language=javascript>alert('温馨提示：\\n\\n祝贺您申请成功！\\n\\n请及时到银行给公司汇款，请记住汇款准确时间，及时留言。\\n\\n银行：".$uss1['bankname']."\\n开户户名：".$uss1['bankusername']."\\n开户账号：".$uss1['bankcard']."\\n开户地址：".$uss1['bankaddress']."\\n\\n会员编号：".$uss1['nickname']."\\nQQ号码：".$uss1['userqq']."\\n电话：".$uss1['usertel']."\\n\\n请抄写保存\\n\\n进入等待审核阶段' );window.location.href='?'</script>";
							}elseif ($us['ulevel']==1){
								echo "<script language=javascript>alert('温馨提示：\\n\\n祝贺您申请成功！\\n\\n请及时到银行给公司汇款，请记住汇款准确时间，及时留言。\\n\\n银行：".$uss2['bankname']."\\n开户户名：".$uss2['bankusername']."\\n开户账号：".$uss2['bankcard']."\\n开户地址：".$uss2['bankaddress']."\\n\\n会员编号：".$uss2['nickname']."\\nQQ号码：".$uss2['userqq']."\\n电话：".$uss2['usertel']."\\n\\n请抄写保存\\n\\n进入等待审核阶段' );window.location.href='?'</script>";
							}elseif ($us['ulevel']==2){
								echo "<script language=javascript>alert('温馨提示：\\n\\n祝贺您申请成功！\\n\\n请及时到银行给公司汇款，请记住汇款准确时间，及时留言。\\n\\n银行：".$uss3['bankname']."\\n开户户名：".$uss3['bankusername']."\\n开户账号：".$uss3['bankcard']."\\n开户地址：".$uss3['bankaddress']."\\n\\n会员编号：".$uss3['nickname']."\\nQQ号码：".$uss3['userqq']."\\n电话：".$uss3['usertel']."\\n\\n请抄写保存\\n\\n进入等待审核阶段' );window.location.href='?'</script>";
							}elseif ($us['ulevel']==3){
								echo "<script language=javascript>alert('温馨提示：\\n\\n祝贺您申请成功！\\n\\n请及时到银行给公司汇款，请记住汇款准确时间，及时留言。\\n\\n银行：".$uss4['bankname']."\\n开户户名：".$uss4['bankusername']."\\n开户账号：".$uss4['bankcard']."\\n开户地址：".$uss4['bankaddress']."\\n\\n会员编号：".$uss4['nickname']."\\nQQ号码：".$uss4['userqq']."\\n电话：".$uss4['usertel']."\\n\\n请抄写保存\\n\\n进入等待审核阶段' );window.location.href='?'</script>";
							}
//							echo "<script language=javascript>alert('温馨提示：\\n\\n祝贺您申请成功！\\n\\n请及时到银行给公司汇款，请记住汇款准确时间，及时留言。\\n\\n银行：".$us['bankname']."\\n开户户名：".$us['bankusername']."\\n开户账号：".$us['bankcard']."\\n开户地址：".$us['bankaddress']."\\n\\n会员编号：".$us['nickname']."\\nQQ号码：".$us['userqq']."\\n电话：".$us['usertel']."\\n\\n请抄写保存\\n\\n进入等待审核阶段' );window.location.href='?'</script>";	
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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/table.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>升级申请</title>
<script language="javascript">
<!--
function checknickname(lx)
{
	var iframe = document.getElementById("iframe");
	var user =  document.getElementById("nickname");
	iframe.src= "checknickname.php?lx="+lx+"&nickname="+user.value;
}
-->
</script>
</head>
<body>
<iframe name="iframe" id="iframe" width="0" height="0" src="about:blank" style="display:none"></iframe>
<form name="form1" method="post" action="?" onSubmit="return CheckForm();">
<table  width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
	<tr>
  <td align="right">第一层会员:</td>
  <td><?=$us['fathername']?></td>
  </tr>
  <?php $us2=getMemberbyNickName($us['fathername'])?>
  <tr>
  <td align="right">第二层会员:</td>
  <td><?=$us2['fathername']?></td>
  </tr>
   <?php $us3=getMemberbyNickName($us['fathername'])?>
  	<tr>
  <td align="right">第三层会员:</td>
  <td><?=$us3['fathername']?></td>
  </tr>
   <?php $us4=getMemberbyNickName($us['fathername'])?>
  	<tr>
  <td align="right">第四层会员:</td>
  <td><?=$us4['fathername']?></td>
  </tr>
 <tr>
    <td colspan="2" align="center">升级说明</td>
    </tr>
    <?php $_ulevel=new ulevel_class();
    $ul=$_ulevel->getulevelbyulevel($us['ulevel']);?>
  <tr>
  <td align="right">目前级别:</td>
  <?php if ($ul['ulevel']){?>
  <td><?=$ul['lvname']?></td>
  <?php }else {?>
   <td>零级会员</td>
  <?php }?>
  </tr>
  <tr style="display: none">
  <td align="right">升级会员编号:</td>
  <td><input name="nickname" id="nickname" type="text"  value="<?php echo $us['nickname']?> " readonly/>
    </td>
  </tr>
  <tr>
    <td width="46%" height="22" align="right">申请升级：</td>
    <td width="54%" align="left">
      <select name="uplv" id="uplv">
      <?php 
    		session_start();
    		$ulevel = $us['ulevel'];
    		$sql = "select * from ulevel where ulevel = $ulevel+1";
    		$result = mysql_query($sql);
    		while ($row = mysql_fetch_assoc($result)){?>
    		<option value='<?=$row['ulevel']?>'><?=$row['lvname']?></option>
    	<?php } ?>
      </select></td>
  </tr>
  <tr>
  <?php if ($us['ulevel']==0){?>
    <td colspan="2" align="center">向上层会员：<?=$us['fathername']?>，交升级费1000元。</td>
    <?php }elseif ($us['ulevel']==1){?>
      <td colspan="2" align="center">向上层会员：<?=$us2['fathername']?>，交升级费2000元。</td>
       <?php }elseif ($us['ulevel']==2){?>
       <td colspan="2" align="center">向上层会员：<?=$us3['fathername']?>，交升级费8000元。</td>
       <?php }elseif ($us['ulevel']==3){?>
       <td colspan="2" align="center">向上层会员：<?=$us4['fathername']?>，交升级费30000元。</td>
       <?php }?>
    </tr>
</table>
<table align="center" class="ziti">
        <tr>
          <td><input name="submit" id="submit" type="submit" class="button_green" value="申 请 升 级" onClick="window.location.href='?'">
        </tr>
      </table>
<br>
<table width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
        <tr>
        <td height="20" colspan="9" align="center"> 申 请 记 录</td>
      </tr>
      <tr>
     	
        <td align="center">申请人编号</td>
        <td align="center">申请人姓名</td>
        <td align="center">原级别</td>
        <td align="center">申请级别</td>
<!--        <td align="center">补单金额</td>-->
        <td align="center">申请时间</td>
        <td align="center">上层申请人编号</td>
      	<td align="center">上层收款人姓名</td>
        <td  align="center">状态</td>
        <td  align="center">确认时间</td>
    </tr>
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
      <tr>
        
        <td align="center"><?=$row['snickname']?></td>
        <td align="center"><?=$row['susername']?></td>
        <?php if ($yul['ulevel']){?>
        <td align="center"><?=$yul['lvname']?></td>
        <?php }else{?>
         <td align="center">零级会员</td>
        <?php }?>
        <td align="center"><?=$uul['lvname']?></td>
<!--        <td align="center"><?=$row['cha']?></td>-->
        <td align="center"><?=$row['udate']?></td>
        <td align="center"><?=$row['nickname']?></td>
        <td align="center"><?=$row['username']?></td>
        <td   align="center"><?php if ($row['issh']==1){?>通过审核<?php }else{?> <font color="#FF0000">未审核</font><?php }?></td>
        <td align="center"><?=$row['rdate']?></td>
      </tr>
      <?php
			}
		}
	  ?>
  </table>
  <table width="100%" border="0" class="ziti">
          <tr>
            <td align="left">&nbsp;</td>
            <td align="right"><?php echo fenye($p,$pagesize,$sum,$total,$cx)?></td>
          </tr>
        </table>
</form>
</body>
</html>