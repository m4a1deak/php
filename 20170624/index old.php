<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include("function.php");
header("Content-Type: text/html;charset=utf-8");
session_start();
unset($_SESSION['ID']); 
unset($_SESSION['NickName']); 
unset($_SESSION['UserID']); 
unset($_SESSION['isboss']);
if ($_POST['loginnow'] == "loginnow"){
	if($_POST['txtValidCode'] == $_SESSION['code']){
		if(systemstatus()){
			if (checkLogin($_POST['txtUserAccount'],$_POST['txtPassword'])){
				$us=getMemberbyNickName($_POST['txtUserAccount']);
				if ($us['islock']==0){
				$_SESSION['ID']=$us['id'];
				$_SESSION['nickname']=$us['nickname'];
				$_SESSION['username']=$us['username'];
				$_SESSION['userid']=$us['userid'];
				$_SESSION['isboss']=$us['isboss'];
				$_SESSION['sclogin']=$us['sclogin'];
				$_SESSION['bdid']=$us['bdid'];
				$_SESSION['isbd']=$us['isbd'];
				$_SESSION['ispay']=$us['ispay'];
				$_SESSION['ulevel']=$us['ulevel'];
				$_SESSION['bdlevel']=$us['bdlevel'];
				$_SESSION['ppath']=$us['ppath'];
				$_SESSION['dzb']=$us['dianzibi'];
				if ($us['id']==1){
					$_SESSION['bdname']=$us['nickname'];
				}else{
					if ($us['isbd']==2){
						$_SESSION['bdname']=$us['nickname'];
					}else{
						$_SESSION['bdname']=$us['bdname'];	
					}
				}
				$_SESSION['bclogin']=now();
				$member_update['sclogin']=now();
				edit_update_cl('member',$member_update,$us['id']);
				
				echo "<script language=javascript>window.location.href='./newr/index.php'</script>";
				}else{
					echo "<script language=javascript>alert('您已被管理员锁定,无法登陆,请联系管理员.');window.location.href='?'</script>";	
				}
			}else{
				echo "<script language=javascript>alert('用户名或密码错误.');window.location.href='?'</script>";
			}
		}else{
    		echo "<script language=javascript>alert('系统维护,暂时关闭,给您带来不便我们感到万分抱歉.');window.location.href='?'</script>";
		}
	}else{
		echo "<script language=javascript>alert('验证码错误.');window.location.href='?'</script>";
	}
}else{
	$_SESSION['ID']=null;
	$_SESSION['nickname']=null;
	$_SESSION['userid']=null;
	$_SESSION['isboss']=null;
	$_SESSION['pass2']=null;
	$_SESSION['pass3']=null;
	$_SESSION['bdname']=null;
	$_SESSION['bdid']=null;
		
}

	

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>欢迎登录</title>
    <link href="./images/Images/style.css" rel="stylesheet" type="text/css" />
    <!--[if lt IE 7]>
        <script type="text/javascript" src="./images/Images/unitpngfix.js"></script>
    <![endif]-->
    <script>
function CheckForm(){
	txtUserAccount=document.form1.txtUserAccount.value;
	txtPassword=document.form1.txtPassword.value;
	txtValidCode=document.form1.txtValidCode.value;
	if(txtUserAccount.length == 0){
		
		document.form1.txtUserAccount.focus();
		return false;
	}
	if(txtPassword.length == 0){
		alert("请输入密码.");
		document.form1.txtPassword.focus();
		return false;
	}
	if(txtValidCode.length == 0){
		alert("请输入验证码.");
		document.form1.txtValidCode.focus();
		return false;
	}
}
function submitYouFrom(path){
 $('form1').action=path;
 $('form1').submit();
}
</script>
</head>

<!-- <body style="overflow:hidden;background-color:#1c77ac;background-image:url(./images/Images/images/light.png);background-repeat:no-repeat;background-position:center top;" >-->
<body></body>
<form name="form1" method="post" action="Index.php" id="form1" onSubmit="return CheckForm()">
<INPUT type=hidden value=loginnow name=loginnow> 
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMjAxNzc1MTA0OGRkSOoUmGvNADr9HBwK5tOuMn7k4I8=" />
</div>

<div>

	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWBQKCter1AwKYx8MkAuGn3PELAuSnqMgPAuOf7dwEyX1lCzmwKNGWmYo2Ts2m2TLDexw=" />
</div>
   <!--  <div class="logintop">    
        <span>欢迎登录</span>
    </div>
    -->
  
     <div class="loginbody">
      <div  style="left: 580px; position: absolute; top: 80px; "  >
      </div>
      <div  style="left: 550px; position: absolute; top: 120px; "  >
    
      </div>
     
      <div>
      <br/>
       <br/>
        <br/>
      </div>
        <div class="loginbox">
            <ul>
                <li><input name="txtUserAccount" type="text"  id="txtUserAccount" class="login1" /></li>
                <li><input name="txtPassword" type="password"  id="txtPassword" class="login2" /></li>
                <li><input name="txtValidCode" type="text" maxlength="4" id="txtValidCode" class="login3" />
                <img id="txtValidCode" class="Validate" alt="验证码图片" onclick="this.src=this.src+'?'" src="./code.php" src="" style="height:39px;width:110px;border-width:0px;" /></li>
                <li><input type="submit" name="Btn_Login" value="登录" id="Btn_Login" class="loginbtn" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='Index3.php'>忘记密码？</a>
                </li>
            </ul>
        </div> 
    </div>
</form>
</body>
</html>
