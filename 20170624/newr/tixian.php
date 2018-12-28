<?php
include("check.php");
include("check2.php");
include_once("../function.php");
include_once("../class/email_class.php");
include_once("../class/system_class.php");
date_default_timezone_set("PRC");
header("Content-Type: text/html;charset=utf-8");
session_start();
	$us=getMemberbyID($_SESSION['ID']);
	$UserTel=$us['usertel'];
	$BankName=$us['bankname'];
	$BankCard=$us['bankcard'];
	$BankUserName=$us['bankusername'];
	$BankAddress=$us['bankaddress'];
	$zhifubao=$us['zhifubao'];
	$caifutong=$us['caifutong'];
	$mey=$us['mey'];
	$bdid=$us['bdid'];
	$bdname=$us['bdname'];
	$_system=new system_class();
	$system=$_system->system_information(1);
 	$time=$system['txtime'];
// 	$isb3=unserialize($system['isb3']);
if ($_POST['submit']){
// 	$date=date("w")==0?7:date("w");
// 	$hi=(int)date("Hi");
// 	$time1=(int)date("Hi",strtotime($time[1]));
// 	$time2=(int)date("Hi",strtotime($time[2]));
	if ($time==8){
		//不限日期
	}else {
		//体现限日期
		$xingqi= date("w");
		if ($xingqi!=$time) {
			
			alert("今天不是提现日,申请提交失败","?");
			return ;
		}
	}
	 
		
		$uid=$_SESSION['ID'];
		$jine=$_POST['jine'];
// 		if ($isb3==0){
// 			echo "<script language=javascript>alert($isb3);window.location.href='?'</script>";
// 		}else
// 	if ($us['maxmey']!=$us['lsk'] && $us['isbd']!=2) {
// 		alert("会员返本后可提现,申请提交失败","?");
// 		return ;	
		
// 	}
// 	$zhou1=date("Y-m-d H:i:s",mktime(0, 0 , 0,date("m"),date("d")-date("w")+1,date("Y")));
// 	$zhou7=date("Y-m-d H:i:s",mktime(23,59,59,date("m"),date("d")-date("w")+7,date("Y")));
// 	$sql = "select  count(*) from `tixian` where tdate<='$zhou7' and tdate>='$zhou1'  and uid = ".$uid."";
// 	$result = mysql_query($sql);
// 	$array = mysql_fetch_assoc($result);
// 	if ($array['count(*)']>=1) {
// 		alert("会员每周可提现一次,申请提交失败","?");
// 		return ;
// 	}
		
	
		if ($jine<=$mey){
			$tixian['uid']=$uid;
			$tixian['nickname']=$_SESSION['nickname'];
			$tixian['username']=$us['username'];
			$tixian['usertel']=$_POST['UserTel'];
			
			
			if ($_POST['txlx']==1){
				$tixian['bankname']=$_POST['BankName'];
				$tixian['bankcard']=$_POST['BankCard'];
				$tixian['bankaddress']=$_POST['BankAddress'];
				$tixian['bankusername']=$_POST['BankUserName'];
			}else if($_POST['txlx']==2){
				$tixian['bankname']="支付宝";
				$tixian['bankcard']=$_POST['zhifubao'];
			}else if($_POST['txlx']==3){
				$tixian['bankname']="微  信";
				$tixian['bankcard']=$_POST['caifutong'];
			}
			$tixian['bdid']=$bdid;
			$tixian['bdname']=$bdname;
			$tixian['jine']=$jine;
			//$shouxu=$system['txsl']/100*$jine;
			//$tixian['shouxu']=$shouxu;
			$tixian['tdate']=now();
			$member['mey']=$mey-$jine; 
			add_insert_cl('tixian',$tixian);
			edit_update_cl('member',$member,$uid);
// 			$_email=new email_class();
// 			$email=$_email->getemail();
// 			if ($email['isstart']==1){
// 				if ($email['txtzhy']==1){
// 					$title="提现申请通知";
// 					$content="尊敬的用户您好,您于".now()."向公司提现：".$jine."元,如不是您本人操作,请立即联系公司管理员.";
// 					$_email->sendemail($us['useremail'],$us['nickname'],$title,$content);
// 				}
// 				if ($email['txtzadmin']==1){
// 					$title="会员提现申请";
// 					$content="管理员您好,会员".$us['nickname']."于".now()."向公司提现：".$jine."元";
// 					$_email->sendemail($email['emailuser'],$email['emailname'],$title,$content);
// 				}
// 			}
			echo "<script language=javascript>alert('您的提现申请已经提交,请耐心等待审核.\\n本次提现金额:".$jine."');window.location.href='?'</script>";
			
			//echo "<script language=javascript>alert('您的提现申请已经提交,请耐心等待审核.\\n本次提现金额:".$jine."\\n手续费:".$shouxu."');window.location.href='?'</script>";
		
	}else{
		echo "<script language=javascript>alert('您的余额不足,申请提交失败');window.location.href='?'</script>";
	}
	
	
}
$arr=array("","星期一","星期二","星期三","星期四","星期五","星期六","星期天")
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'header.php';?>
<script src="../js/calendar.js"></script>
<script language="javascript">
<!--
function CheckForm(){
	UserTel=document.form1.UserTel.value;
	BankCard=document.form1.BankCard.value;
	BankUserName=document.form1.BankUserName.value;
	BankAddress=document.form1.BankAddress.value;
	jine=document.form1.jine.value;
	if(UserTel.length == 0){
		alert("温馨提示:\n请输入联系电话.");
		document.form1.UserTel.focus();
		return false;
	}
	if(BankCard.length == 0){
		alert("温馨提示:\n请输入开户帐号.");
		document.form1.BankCard.focus();
		return false;
	}
	if(BankUserName.length == 0){
		alert("温馨提示:\n请输入开户姓名.");
		document.form1.BankUserName.focus();
		return false;
	}
	if(BankAddress.length == 0){
		alert("温馨提示:\n请输入开户地址.");
		document.form1.BankAddress.focus();
		return false;
	}
	if(jine.length == 0){
		alert("温馨提示:\n请输入提现金额.");
		document.form1.jine.focus();
		return false;
	}
	if(jine < <?=$system['txmix']?>){
		alert("温馨提示:\n提现最小金额为<?=$system['txmix']?>.");
		document.form1.jine.focus();
		return false;
		}
if(jine % <?=$system['txbs']?> != 0){
		alert("温馨提示:\n提现金额必须为<?=$system['txbs']?>的倍数.");
		document.form1.jine.focus();
		return false;
	}
	return true;
}

function checknum(ob){
	
	var reg=/^[1-9]{1,}\d*$/;
	if(!reg.test(ob.value)){
		ob.value='';
		
	}
}
-->
</script>
</head>
<body>
<?php include 'navbar.php';?>
<div id="content">
  <div class="container">
    <div class="row">
      <?php include 'leftsider.php';?>
      <div class="span9" >
    <div class="widget">
                    
                   
           <div class="page-header">
            <h1>奖金提现</h1>
          </div>
          
      <div class="table-overflow">    
		<!-- 限制手机左右拉伸宽度 -->
		 <div class="row-fluid" style=" width:848px;">
      
      
	<form name="form1" method="post" action="?" onSubmit="return CheckForm();">
	
<table  width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
    <tr style="display:none;">
    	<td colspan="2" align="center">提现时间：<?php echo $arr[$time[0]]." ".$time[1]."-".$time[2];?></td>
    </tr>
    <tr>
    <td width="46%" height="22" align="right">奖金余额：</td>
    <td width="54%" align="left"><?=$mey?></td>
  </tr>
  <tr >
    <td width="46%" height="22" align="right">提现账户：</td>
    <td width="54%" align="left">
      <select name="txlx" id="txlx">
        <option value="1">银行卡</option>
        <!-- 
        <option value="2">支付宝</option>
        <option value="3">微信</option>
         -->
      </select></td>
  </tr>
  <tr style="display:none">
    <td width="46%" height="22" align="right">联系电话：</td>
    <td width="54%" align="left"><input type="text" name="UserTel" id="UserTel" value="<?=$UserTel?>"></td>
  </tr>
  <tr >
    <td height="22" align="right">开户银行：</td>
    <td align="left"><select name="BankName" id="BankName">
    

         <option value="中国银行" <?php if($BankName=='中国银行'){?>selected<?php }?>>中国银行</option>
        <option value="中国农业银行" <?php if($BankName=='中国农业银行'){?>selected<?php }?>>中国农业银行</option>
        <option value="中国工商银行" <?php if($BankName=='中国工商银行'){?>selected<?php }?>>中国工商银行</option>
        <option value="中国招商银行" <?php if($BankName=='中国招商银行'){?>selected<?php }?>>中国招商银行</option>
        <option value="中国建设银行" <?php if($BankName=='中国建设银行'){?>selected<?php }?>>中国建设银行</option>
        <option value="邮政储蓄银行" <?php if($BankName=='邮政储蓄银行'){?>selected<?php }?>>邮政储蓄银行</option>
          <option value="中国华夏银行" <?php if($BankName=='中国华夏银行'){?>selected<?php }?>>中国华夏银行</option>
          <option value="中国农商银行" <?php if($BankName=='中国农商银行'){?>selected<?php }?>>中国农商银行</option>
          <option value="中国交通银行" <?php if($BankName=='中国交通银行'){?>selected<?php }?>>中国交通银行</option>
      </select>
      </td>
  </tr>
  <tr >
    <td height="22" align="right">开户帐号：</td>
    <td align="left"><input type="text" name="BankCard" id="BankCard" value="<?=$BankCard?>"></td>
  </tr>
  <tr >
    <td height="22" align="right">开户姓名：</td>
    <td align="left"><input type="text" name="BankUserName" id="BankUserName" value="<?=$BankUserName?>"></td>
  </tr>
  <tr >
    <td height="22" align="right">开户地址：</td>
    <td align="left"><input type="text" name="BankAddress" id="BankAddress" value="<?=$BankAddress?>"></td>
  </tr>
  <tr style="display: none">
    <td height="22" align="right">支付宝：</td>
    <td align="left"><input type="text" name="zhifubao" id="zhifubao" value="<?=$zhifubao?>"></td>
  </tr>
  <tr style="display: none">
    <td height="22" align="right">微信：</td>
    <td align="left"><input type="text" name="caifutong" id="caifutong" value="<?=$caifutong?>"></td>
  </tr>
  <tr>
    <td height="22" align="right">提现金额：</td>
    <td align="left"><input name="jine" type="text" id="jine" size="10" maxlength="10" onfocus="if(this.value==0)this.value='';" onblur="if(this.value==0)this.value='';" onkeyup="checknum(this);"/>
    </td>
  </tr>
</table>
<table align="center">
        <tr>
          <td><input name="submit" id="submit" type="submit" class="button_green" value="提  取"></td>
        </tr>
      </table>
<br>
<table class="table table-bordered table-striped table-hover" style=" margin-bottom:1px;">
        <tr>
        <td height="20" colspan="12" align="center">提 现 记 录</td>
      </tr>
      <tr>
        <td align="center">会员编号</td>
        <td align="center">会员姓名</td>
        <td align="center">提现金额</td>
      
        <td align="center">开户银行</td>
        <td align="center">开户帐号</td>
        <td align="center">开户姓名</td>
        <td align="center">开户地址</td>
        <td align="center">审核状态</td>
        <td align="center">提现时间</td>
        <td style="display: none" align="center">服务中心</td>
    </tr>
      <?php
	  	$pagesize = 10; //设置每页记录数 
	  	$sql = "SELECT * FROM `tixian` WHERE uid=".$_SESSION['ID']."";
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
      	$sql = "SELECT * FROM `tixian` WHERE uid=".$_SESSION['ID']." order by id desc limit ".$start.",".$pagesize;
		if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
	  ?>
      <tr>
        <td align="center"><?=$row['nickname']?></td>
        <td align="center"><?=$row['username']?></td>
        <td align="center"><?=$row['jine']?></td>
       
       
        <td align="center"><?=$row['bankname']?></td>
        <td align="center"><?=$row['bankcard']?></td>
        <td align="center"><?=$row['bankusername']?></td>
        <td align="center"><?=$row['bankaddress']?></td>
        <td align="center"><?php if ($row['isgrant']==1){?>已发放<?php }else{?> <font color="#FF0000">未发放</font><?php }?></td>
        <td align="center"><?=$row['tdate']?></td>
        <td style="display: none" align="center"><?=$row['bdname']?></td>
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
</body>
</html>