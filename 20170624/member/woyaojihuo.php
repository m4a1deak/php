<?php
include("check.php");
include("check2.php");
include_once("../function.php");
include_once("../class/bonus_class.php");
include_once("../class/system_class.php");
include_once("../class/member_class.php");
header("Content-Type: text/html;charset=utf-8");
session_start();
$us=GetMemberbyID($_SESSION['ID']);
if ($_POST['submit']){
	$_member=new member_class();
	$bonus_cl=new bonus_class();
	if($us['ispay']==0){
		if ($us['zsq']>=$us['lsk']){
			$_member->jihuomember($us['id']);
			$me_update['zsq']=$us['zsq']-$us['lsk'];
			edit_update_cl('member',$me_update,$us['id']);					
			$bonus_cl->b3bonus();
			$bonus_cl->b0bonus();
			$_member->addbwang();
			$bonus_cl->b0bonus();
			echo "<script language=javascript>alert('激活成功,您已经成为正式会员.');window.location.href='?'</script>";
		}else{
			echo "<script language=javascript>alert('您的积分余额不足,激活失败.');window.location.href='?'</script>";
		}
	}else{
		echo "<script language=javascript>alert('你已经成功激活,请勿重复激活.');window.location.href='?'</script>";		
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
  <td width="46%" align="right">积分余额:</td>
  <td width="54%"><?=$us['zsq']?></td>
  </tr>
</table>
<table align="center" class="ziti">
        <tr>
          <td><input name="submit" id="submit" type="submit" class="button_green" value="我 要 激 活" onClick="javascript:return confirm('您确认进行激活吗？');"></td>
        </tr>
      </table>
</form>
</body>
</html>