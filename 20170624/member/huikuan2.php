<?php
include("check.php");
include("check2.php");
include_once("../class/member_class.php");
include_once("../function.php");
include_once("../class/email_class.php");
header("Content-Type: text/html;charset=utf-8");
session_start();
$us=que_select_cl('member',$_SESSION['ID']);


if ($_GET['action']=="del" and $_GET['hid']!=""){
	$hk=que_select_cl("huikuan",$_GET['hid']);
	if ($hk['isgrant']==0){
		edit_delete_cl('huikuan',$_GET['hid']);	
		echo "<script language=javascript>alert('删除完成.');window.location.href='?'</script>";	
	}else{
		echo "<script language=javascript>alert('汇款通知已确认,删除失败.');window.location.href='?'</script>";		
	}
}
if($_POST['button3']){
	$cheuid_arr = $_GET['id'];
	$_member=new member_class();
	$bonus_cl=new bonus_class();
	if($us=$_member->getMemberbyID($cheuid_arr)){
		if($me=$_member->getMemberbyID($_SESSION['ID'])){
			if ($us['bdid']==$me['id']){
				if ($us['ispay']==0){
					if ($me['zsq']>=$us['lsk']){
						$_member->jihuomember($us['id']);
						$me_update['zsq']=$me['zsq']-$us['lsk'];
						$_ulevel_class=new ulevel_class();
						$_ul=$_ulevel_class->getulevelbyulevel($me['ulevel']);
						edit_update_cl('member',$me_update,$me['id']);
						$_member->addbdrecord($us,$me,$us['lsk']);
					}else{
						echo "<script language=javascript>alert('您的积分余额不足,激活失败.');window.location.href='?'</script>";
					}
				}
			}else{
				echo "<script language=javascript>alert('您不是该会员的服务中心,无法激活该会员.');window.location.href='?'</script>";
			}
		}
	}else{
		alert("找不到当前会员信息,可能已被删除,请检查后再试.");
	}
	echo "<script language=javascript>alert('会员激活完成.');window.location.href='?'</script>";
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
	if(snickname.length == 0){
		alert("温馨提示:\n请输入通知会员.");
		document.form1.snickname.focus();
		return false;
	}
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

<table width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
        <tr>
        <td height="20" colspan="7" align="center"> 汇 款 记 录</td>
      </tr>
      <tr>
        <td style="display:none" align="center">会员编号</td>
        <td align="center">汇款人</td>
         <td align="center">汇款时间</td>
        <td align="center">汇款金额</td>
       
        <td align="center">请将用户激活</td>
        <td style="display:none" align="center">服务中心</td>
    </tr>
      <?php
	  	$pagesize = 10; //设置每页记录数 
	  	$sql = "SELECT * FROM `huikuan` WHERE bdid=".$_SESSION['ID']."";
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
      	$sql = "SELECT * FROM `huikuan` WHERE bdid=".$_SESSION['ID']." order by id desc limit ".$start.",".$pagesize;
		if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
	  ?>
      <tr>
      
        <td style="display:none" align="center"><?=$row['nickname']?></td>
        <td align="center"><?=$row['bankusername']?></td>
          <td align="center"><?=$row['sdate']?></td>
        <td align="center"><?=$row['jine']?></td>
      
        <td align="center"><?=$row['bankusername']?></td>
        <td style="display:none" align="center"><?=$row['snickname']?></td>
       
		<td style="display: none" align="center"><input name="button3" type="submit" class="button_green" id="button3" value="激  活" onClick="{if(confirm('您确定要激活该会员吗?')){this.document.selform.submit();return true;}return false;}" ></input>      
        </td>
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