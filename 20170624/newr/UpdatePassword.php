<?php
include("check.php");
include("check2.php");
include_once("../function.php");
header("Content-Type: text/html;charset=utf-8");
session_start();
$member=getMemberbyID($_SESSION['ID']);
if ($_POST['submit']){
	
	if ($_GET['pass'] == 1){
		if (md5($_POST['password1']) == $member['password1']){
			$pass['password1']=	md5($_POST['npassword1']);
			$pass['pass1']=	$_POST['npassword1'];
		}else{
			echo "<script language=javascript>alert('密码错误,请确认后重新输入.');window.location.href='?'</script>";		
		}
	}elseif ($_GET['pass'] == 2){
		if (md5($_POST['password2']) == $member['password2']){
			$pass['password2']=	md5($_POST['npassword2']);
			$pass['pass2']=	$_POST['npassword2'];
		}else{
			echo "<script language=javascript>alert('密码错误,请确认后重新输入.');window.location.href='?'</script>";		
		}
	}elseif ($_GET['pass'] == 3){
		if (md5($_POST['password']) == $member['password2']){
			$pass['passquestion']=$_POST['passquestion'];
			$pass['passanswer']=$_POST['passanswer'];
		}else{
			echo "<script language=javascript>alert('二级密码错误,请确认后重新输入.');window.location.href='?'</script>";	
		}
	}
	echo edit_update_cl('member',$pass,$_SESSION['ID']);
	echo "<script language=javascript>alert('修改成功.');window.location.href='?'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'header.php';?>
<script src="../js/calendar.js"></script>
</head>
<body>
<?php include 'navbar.php';?>
<div id="content">
  <div class="container">
    <div class="row">
      <?php include 'leftsider.php';?>
      <div class="span9" >
       <div class="page-header">
            <h1>修改密码</h1>
          </div>
      
<title>个人资料</title>

<script language="javascript">
<!--
function ckpass1(){
	document.getElementById('pass1').style.display='';
	document.getElementById('pass2').style.display='none';
	document.getElementById('pass3').style.display='none';
}
function ckpass2(){
	document.getElementById('pass1').style.display='none';
	document.getElementById('pass2').style.display='';
	document.getElementById('pass3').style.display='none';
}
function ckpass3(){
	document.getElementById('pass1').style.display='none';
	document.getElementById('pass2').style.display='none';
	document.getElementById('pass3').style.display='';
}

function CheckForm1(){
	password1=document.form1.password1.value;
	npassword1=document.form1.npassword1.value;
	qnpassword1=document.form1.qnpassword1.value;
	
	
	if(password1.length == 0){
		alert("温馨提示:\n请输入原密码.");
		document.form1.password1.focus();
		return false;
	}
	if(npassword1.length == 0){
		alert("温馨提示:\n请输入新密码.");
		document.form1.npassword1.focus();
		return false;
	}
	if(qnpassword1.length == 0){
		alert("温馨提示:\n请确认新密码.");
		document.form1.qnpassword1.focus();
		return false;
	}
	if(qnpassword1 != npassword1){
		alert("温馨提示:\n两次密码输入不一致,请确认后重新输入.");
		document.form1.qnpassword1.focus();
		return false;
	}
	return true;
}

function CheckForm2(){
	password2=document.form2.password2.value;
	npassword2=document.form2.npassword2.value;
	qnpassword2=document.form2.qnpassword2.value;
	
	
	if(password2.length == 0){
		alert("温馨提示:\n请输入原密码.");
		document.form2.password2.focus();
		return false;
	}
	if(npassword2.length == 0){
		alert("温馨提示:\n请输入新密码.");
		document.form2.npassword2.focus();
		return false;
	}
	if(qnpassword2.length == 0){
		alert("温馨提示:\n请确认新密码.");
		document.form2.qnpassword2.focus();
		return false;
	}
	if(qnpassword2 != npassword2){
		alert("温馨提示:\n两次密码输入不一致,请确认后重新输入.");
		document.form2.qnpassword2.focus();
		return false;
	}
	return true;
}

function CheckForm3(){
	password=document.form3.password.value;
	passquestion=document.form3.passquestion.value;
	passanswer=document.form3.passanswer.value;
	
	
	if(password.length == 0){
		alert("温馨提示:\n请输入二级密码.");
		document.form3.password3.focus();
		return false;
	}
	if(passquestion.length == 0){
		alert("温馨提示:\n请输入密保问题.");
		document.form3.passquestion.focus();
		return false;
	}
	if(passanswer.length == 0){
		alert("温馨提示:\n请输入密保答案.");
		document.form3.qnpassword3.focus();
		return false;
	}
	
	return true;
}
-->
</script>
</head>
<body>
<div>
	<div class="buttons"><button style="float:left" type="botton" class="regular" onClick="ckpass1();">
    <img src="img/textfield_key.png" alt=""/> 
    修改一级密码
    </button>
    </div>
    <div class="buttons"><button style="float:left" type="botton" class="regular" onClick="ckpass2();">
    <img src="img/textfield_key.png" alt=""/> 
    修改二级密码
    </button>
    </div>
    <!--  
    <div class="buttons"><button style="float:left; type="botton" class="regular" onClick="ckpass3();">
    <img src="img/textfield_key.png" alt=""/> 
    修改密保
    </button>
    </div>
    -->
</div>
<br><br><br>
<table id="pass1" width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
<form name="form1" method="post" action="?pass=1" onSubmit="return CheckForm1();">
	<tr>
    <td colspan="2" align="center">修改一级密码</td>
    </tr>
     <tr>
    <td width="50%" align="right">原密码：</td>
    <td width="50%" align="left">
      <input type="password" name="password1" id="password1">
    </td>
  </tr>
  <tr>
    <td width="50%" align="right">新密码：</td>
    <td width="50%" align="left">
      <input type="password" name="npassword1" id="npassword1" >
    </td>
  </tr>
  <tr>
    <td width="50%" align="right">确认新密码：</td>
    <td width="50%" align="left">
      <input type="password" name="qnpassword1" id="qnpassword1" >
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center">
  <input name="submit" type="submit" class="button_green" value="确认修改" id="submit">
      </td>
  </tr>
</form>
</table>

<table id="pass2" width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1" style="display:none">
<form name="form2" method="post" action="?pass=2" onSubmit="return CheckForm2();">
	<tr>
    <td colspan="2" align="center">修改二级密码</td>
    </tr>
     <tr>
    <td width="50%" align="right">原密码：</td>
    <td width="50%" align="left">
      <input type="password" name="password2" id="password2">
    </td>
  </tr>
  <tr>
    <td width="50%" align="right">新密码：</td>
    <td width="50%" align="left">
      <input type="password" name="npassword2" id="npassword2" >
    </td>
  </tr>
  <tr>
    <td width="50%" align="right">确认新密码：</td>
    <td width="50%" align="left">
      <input type="password" name="qnpassword2" id="qnpassword2" >
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center">
 <input name="submit" type="submit" class="button_green" value="确认修改" id="submit">
      </td>
  </tr>
</form>
</table>

<table id="pass3" width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1" style="display:none">
<form name="form3" method="post" action="?pass=3" onSubmit="return CheckForm3();">
	<tr>
    <td colspan="2" align="center">修改密保</td>
    </tr>
     <tr>
    <td width="50%" align="right">二级密码：</td>
    <td width="50%" align="left">
      <input type="password" name="password" id="password3">
    </td>
  </tr>
  <tr>
    <td width="50%" align="right">密保问题：</td>
    <td width="50%" align="left">
      <select name="passquestion" id="passquestion" >
                                        <option value="您母亲的姓名是？" <?php if($us['passquestion']=='您母亲的姓名是？'){?>selected<?php }?>>您母亲的姓名是？</option>
								        <option value="您父亲的姓名是？" <?php if($us['passquestion']=='您父亲的姓名是？'){?>selected<?php }?>>您父亲的姓名是？</option>
								        <option value="您配偶的姓名是？" <?php if($us['passquestion']=='您配偶的姓名是？'){?>selected<?php }?>>您配偶的姓名是？</option>
								        <option value="您父亲的生日是？" <?php if($us['passquestion']=='您父亲的生日是？'){?>selected<?php }?>>您父亲的生日是？</option>
								        <option value="您母亲的生日是？" <?php if($us['passquestion']=='您母亲的生日是？'){?>selected<?php }?>>您母亲的生日是？</option>
								        <option value="您配偶的生日是？" <?php if($us['passquestion']=='您配偶的生日是？'){?>selected<?php }?>>您配偶的生日是？</option>
								        <option value="您的出生地是？" <?php if($us['passquestion']=='您的出生地是？'){?>selected<?php }?>>您的出生地是？</option>
								        <option value="您的最喜欢的书是？" <?php if($us['passquestion']=='您的最喜欢的书是？'){?>selected<?php }?>>您的最喜欢的书是？</option>
								        <option value="您的最喜欢的电影是？" <?php if($us['passquestion']=='您的最喜欢的电影是？'){?>selected<?php }?>>您的最喜欢的电影是？</option>
								        <option value="您的最喜欢的颜色？" <?php if($us['passquestion']=='您的最喜欢的颜色？'){?>selected<?php }?>>您的最喜欢的颜色？</option>
                                     </select>     
    </td>
  </tr>
  <tr>
    <td width="50%" align="right">密保答案：</td>
    <td width="50%" align="left">
      <input type="text" name="passanswer" id="passanswer" >
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center">
    <input name="submit" type="submit" class="button_green" value="确认修改" id="submit">
    </td>
  </tr>
</form>
</table>

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