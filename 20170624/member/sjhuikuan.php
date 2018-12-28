<?php
include("check.php");
include("check2.php");
include_once("../function.php");
include_once("../class/email_class.php");
header("Content-Type: text/html;charset=utf-8");
session_start();
$us=que_select_cl('member',$_SESSION['ID']);
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
//						if ($rs['ulevel']>=$_POST['uplv']){
						
						$_yul=ulevel($sus['ulevel']);
						$_uul=ulevel($_POST['uplv']);
						$ulevelup['cha']=$_uul['lsk']-$_yul['lsk'];
						if($us['zsq']>=$ulevelup['cha']){
							$ulevelup['uid']=$_SESSION['ID'];
							$ulevelup['nickname']=$us['nickname'];
							$ulevelup['username']=$us['username'];
							$ulevelup['ylevel']=$sus['ulevel'];
							$ulevelup['uplevel']=$_POST['uplv'];
							$ulevelup['bdid']=$us['bdid'];
							$ulevelup['bdname']=$us['bdname'];
							$ulevelup['sid']=$sus['id'];
							$ulevelup['snickname']=$sus['nickname'];
							$ulevelup['susername']=$sus['username'];
							$ulevelup['udate']=now();
							$ulevelup['issh']=0;
//							$us_update['zsq']=$us['zsq']-$ulevelup['cha'];
//							$us_update['sgb']=$us['sgb']+$ulevelup['cha'];
							add_insert_cl('ulevelup',$ulevelup);
//							edit_update_cl('member',$us_update,$us['id']);
							
							$ul=ulevel($_POST['uplv']);
							$sus_update['ulevel']=$ul['ulevel'];
							$sus_update['lsk']=$ul['lsk'];
							$sus_update['dan']=$ul['dan'];
							$ispay=$sus['ispay'];
							
							edit_update_cl('member',$sus_update,$sus['id']);
							
							$member_cl->addArea($sus['id'],$sus['treeplace'],$ul['dan']-$sus['dan']);
//							echo "<script language=javascript>alert('升级完成.\\n本次升级金额:".$ulevelup['cha']."' );window.location.href='?'</script>";	
						}else{
							echo "<script language=javascript>alert('您的积分余额不足.');window.location.href='?'</script>";	
						}
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
if ($_POST['submit']){
	if ($sus=getMemberbyNickName($_POST['snickname'])){
		if ($uus=getMemberbyNickName($_POST['rusername'])){
			$jine=$_POST['jine'];
			if ($jine>0){
				$huikuan['uid']=$us['id'];
				$huikuan['nickname']=$us['nickname'];
				$huikuan['username']=$us['username'];
				$huikuan['bankcard']=$_POST['bankcard'];
				$huikuan['bankusername']=$_POST['bankusername'];
				$huikuan['sid']=$sus['id'];
				$huikuan['snickname']=$sus['nickname'];
				$huikuan['jine']=$jine;
				$huikuan['shuoming']=$_POST['shuoming'];
				$huikuan['hdate']=now();
				$huikuan['sdate']=$_POST['sdate'];
				$huikuan['rusername']=$_POST['rusername'];
				$huikuan['rid']=$uus['id'];
				add_insert_cl('huikuan',$huikuan);
				$_email=new email_class();
				$email=$_email->getemail();
				if ($email['hktzadmin']==1){
					$title="汇款通知";
					$content="管理员您好,会员".$huikuan['nickname']."于".now()."向公司提交汇款通知,汇款金额：".$jine."元";
					$_email->sendemail($email['emailuser'],$email['emailname'],$title,$content);
				}
				
				echo "<script language=javascript>alert('汇款通知已经提交.');window.location.href='?'</script>";	
			}else{
				echo "<script language=javascript>alert('金额不正确,请重新填写');window.location.href='?'</script>";	
			}
		}else {
			echo "<script language=javascript>alert('收款人不存在,请确认后重新填写');window.location.href='?'</script>";
		}
	}else{
			echo "<script language=javascript>alert('该会员不存在,请确认后重新填写');window.location.href='?'</script>";	
	}
}

if ($_GET['action']=="del" and $_GET['hid']!=""){
	$hk=que_select_cl("huikuan",$_GET['hid']);
	if ($hk['isgrant']==0){
		edit_delete_cl('huikuan',$_GET['hid']);	
		echo "<script language=javascript>alert('删除完成.');window.location.href='?'</script>";	
	}else{
		echo "<script language=javascript>alert('汇款通知已确认,删除失败.');window.location.href='?'</script>";		
	}
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/table.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="../js/settime.js"></script>
<title>汇款通知</title>
<script language="javascript">
<!--
function CheckForm(){
	jine=document.form1.jine.value;
	snickname=document.form1.snickname.value;
	bankcard=document.form1.bankcard.value;
	bankusername=document.form1.bankusername.value;
	sdate=document.form1.sdate.value;
//	if(snickname.length == 0){
//		alert("温馨提示:\n请输入通知会员.");
//		document.form1.snickname.focus();
//		return false;
//	}
	if(jine.length == 0){
		alert("温馨提示:\n请输入汇款金额.");
		document.form1.jine.focus();
		return false;
	}
	if(jine <= 0){
		alert("温馨提示:\n汇款金额必须大于0.");
		document.form1.jine.focus();
		return false;
	}
	if(bankcard <= 0){
		alert("温馨提示:\n请输入汇款账户.");
		document.form1.bankcard.focus();
		return false;
	}
	if(bankusername <= 0){
		alert("温馨提示:\n请输入账户姓名.");
		document.form1.bankusername.focus();
		return false;
	}
	if(sdate <= 0){
		alert("温馨提示:\n请输入汇款时间.");
		document.form1.sdate.focus();
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
<form name="form1" method="post" action="?" onSubmit="return CheckForm();">
<table  width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
  <tr style="display:none">
    <td height="22" align="right">通知会员：</td>
    <td align="left"><input name="snickname" type="text" id="snickname" size="10" maxlength="20" value="<?=$us['bdname']?>"></td>
  </tr>
  <tr>
    <td height="22" align="right">汇款金额：</td>
    <td align="left"><input name="jine" type="text" id="jine" size="10" maxlength="10" onfocus="if(this.value==0)this.value='';" onblur="if(this.value==0)this.value='';" onkeyup="checknum(this);"/></td>
  </tr>
  <tr>
    <td height="22" align="right">汇款账户：</td>
    <td align="left"><input name="bankcard" type="text" id="bankcard" size="20" maxlength="20"></td>
  </tr>
  <tr>
    <td height="22" align="right">账户姓名：</td>
    <td align="left"><input name="bankusername" type="text" id="bankusername" size="20" maxlength="20"></td>
  </tr>
  <tr>
    <td height="22" align="right">收款人编号：</td>
    <td align="left"><input name="rusername" type="text" id="rusername" size="20" value="<?=$us['rname']?>" maxlength="20"></td>
  </tr>
  <tr>
    <td height="22" align="right">汇款时间：</td>
    <td align="left"><input name="sdate" type="text" id="sdate" size="20" maxlength="20" value="<?=now()?>"  readonly  onclick="_SetTime(this)"></td>
  </tr>
  <tr>
    <td height="22" align="right">汇款说明：</td>
    <td align="left">
      <textarea name="shuoming" id="shuoming" cols="45" rows="5"></textarea>      
      <br>
      (请注明汇款用途和联系电话,如：充值申请,激活会员申请,联系电话.方便管理)</td>
  </tr>
</table>
<table align="center">
        <tr>
          <td><input name="submit" id="submit" type="submit" class="button_green" value="提  交"></td>
        </tr>
  </table>
<br>
<table width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
        <tr>
        <td height="20" colspan="7" align="center"> 汇 款 记 录</td>
      </tr>
      <tr>
        <td style="display:none" align="center">会员编号</td>
        <td align="center">汇款帐户</td>
        <td align="center">账户姓名</td>
        <td align="center">汇款金额</td>
        <td align="center">汇款时间</td>
        <td align="center">汇款说明</td>
        <td align="center">记录时间</td>
        <td style="display:none" align="center">服务中心</td>
        <td align="center">是否确认</td>
    </tr>
      <?php
	  	$pagesize = 10; //设置每页记录数 
	  	$sql = "SELECT * FROM `huikuan` WHERE uid=".$_SESSION['ID']."";
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
      	$sql = "SELECT * FROM `huikuan` WHERE uid=".$_SESSION['ID']." order by id desc limit ".$start.",".$pagesize;
		if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
	  ?>
      <tr>
        <td style="display:none" align="center"><?=$row['nickname']?></td>
        <td align="center"><?=$row['bankcard']?></td>
        <td align="center"><?=$row['bankusername']?></td>
        <td align="center"><?=$row['jine']?></td>
        <td align="center"><?=$row['sdate']?></td>
        <td align="center"><?=$row['shuoming']?></td>
        <td align="center"><?=$row['hdate']?></td>
        <td style="display:none" align="center"><?=$row['snickname']?></td>
		<td align="center"><?php if ($row['isgrant']==0){?><a href="?action=del&hid=<?=$row['id']?>" onClick="{if(confirm('确认删除此条汇款记录吗?')){return true;}return false;}">删除</a><?php }elseif($row['isgrant']==1){?>
		  已确认<?php }?></td>
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