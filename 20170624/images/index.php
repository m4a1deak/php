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
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>百姓福创富系统</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<link href="./newr/css/bootstrap.min.css" rel="stylesheet" />
<link href="./newr/css/bootstrap-responsive.min.css" rel="stylesheet" />

<link href="./newr/css/font-awesome.css" rel="stylesheet" />
<link href="./newr/css/adminia.css" rel="stylesheet" />
<link href="./newr/css/adminia-responsive.css" rel="stylesheet" />
<link href="./newr/css/pages/dashboard.css" rel="stylesheet" />
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
<body>

<style>

BODY {
	FONT-SIZE: 12px;
	COLOR: #ffffff;
	FONT-FAMILY: 宋体
}
TD {
	FONT-SIZE: 12px;
	COLOR: #ffffff;
	FONT-FAMILY: 宋体
}
input, textarea, select, .uneditable-input

{

}


</style>

<!-- 电脑端登陆样式 开始 -->
<DIV class="hidden-phone" id=UpdatePanel1>

<form name="form1" method="post" action="Index.php" id="form1" onSubmit="return CheckForm()">
<INPUT type=hidden value=loginnow name=loginnow> 

<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMjAxNzc1MTA0OGRkSOoUmGvNADr9HBwK5tOuMn7k4I8=" />

	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWBQKCter1AwKYx8MkAuGn3PELAuSnqMgPAuOf7dwEyX1lCzmwKNGWmYo2Ts2m2TLDexw=" />
    

    <DIV id=div1 
style="LEFT: 0px; POSITION: absolute; TOP: 0px; BACKGROUND-COLOR: #E96A0A"></DIV>
    <DIV id=div2 
style="LEFT: 0px; POSITION: absolute; TOP: 0px; BACKGROUND-COLOR: #E96A0A"></DIV>
 
    <DIV>&nbsp;&nbsp; </DIV>
    <DIV>
      <TABLE cellSpacing=0 cellPadding=0 width=900 align=center border=0>
        <TBODY>
          <TR>
            <TD style="HEIGHT: 105px"><IMG src="./images/login_1.gif" 
  border=0></TD>
          </TR>
          <TR>
            <TD background=./images/login_2.jpg height=300><TABLE height=300 cellPadding=0 width=900 border=0>
                <TBODY>
                  <TR>
                    <TD colSpan=2 height=100></TD>
                  </TR>
                  <TR>
                    <TD width=360></TD>
                    <TD><TABLE cellSpacing=0 cellPadding=2 border=0>
                        <TBODY>
                          <TR>
                            <TD style="HEIGHT: 28px" width=80>登 入 名：</TD>
                            <TD style="HEIGHT: 28px" width=150><INPUT name="txtUserAccount" type="text"  id="txtUserAccount"  style="WIDTH: 130px"></TD>
                            <TD style="HEIGHT: 28px" width=370><SPAN  id=RequiredFieldValidator3     style="FONT-WEIGHT: bold; VISIBILITY: hidden; COLOR: white">请输入登入名</SPAN></TD>
                          </TR>
                          <TR>
                            <TD style="HEIGHT: 28px">登入密码：</TD>
                            <TD style="HEIGHT: 28px"><INPUT name="txtPassword" type="password"  id="txtPassword"   style="WIDTH: 130px"   >
                              <input name="loginnow"  type="hidden" value="loginnow"/></TD>
                            <TD style="HEIGHT: 28px"><SPAN id=RequiredFieldValidator4 
                  style="FONT-WEIGHT: bold; VISIBILITY: hidden; COLOR: white">请输入密码</SPAN></TD>
                          </TR>
                          <TR>
                            <TD style="HEIGHT: 28px">验证码：</TD>
                            <TD style="HEIGHT: 28px"><INPUT  name="txtValidCode" type="text" maxlength="4" id="txtValidCode"   style="WIDTH: 130px" ></TD>
                            <TD style="HEIGHT: 28px"><img id="txtValidCode" class="Validate" alt="验证码图片" onclick="this.src=this.src+'?'" src="./code.php"  style="height:27px;margin-top:-4px; width:110px;border-width:0px;" /></TD>
                          </TR>

                          <TR>
                            <TD></TD>
                            <TD colspan="2"><INPUT  name="Btn_Login" value="登录" id="Btn_Login"        style="BORDER-TOP-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-RIGHT-WIDTH: 0px"        type=image src="./images/login_button.gif" > </TD>
                           
                          </TR>
                        </TBODY>
                      </TABLE></TD>
                  </TR>
                </TBODY>
              </TABLE></TD>
          </TR>
          <TR>
            <TD><IMG src="./images/login_3.jpg" 
border=0></TD>
          </TR>
        </TBODY>
      </TABLE>
    </DIV>
    
</FORM>

  </DIV>




<!-- 电脑端登陆样式 结束 -->



<!-- 手机端登陆样式 开始 -->
<TABLE cellSpacing=0 cellPadding=0 width=320 align=center border=0 class="visible-phone">


<form name="form1" method="post" action="Index.php" id="form1" onSubmit="return CheckForm()">
<INPUT type=hidden value=loginnow name=loginnow> 

<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMjAxNzc1MTA0OGRkSOoUmGvNADr9HBwK5tOuMn7k4I8=" />

	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWBQKCter1AwKYx8MkAuGn3PELAuSnqMgPAuOf7dwEyX1lCzmwKNGWmYo2Ts2m2TLDexw=" />
        <TBODY>
          
          <TR>
            <TD height=300><TABLE height=300 cellPadding=0 width=320 border=0>
                <TBODY>
                  
                  <TR>
                    
                    <TD><TABLE cellSpacing=0 cellPadding=2 border=0>
                        <TBODY>
                          <TR>
                            <TD style="HEIGHT: 28px; color:#000;" width=80>登 入 名：</TD>
                            <TD style="HEIGHT: 28px; color:#000;" width=150><INPUT name="txtUserAccount" type="text"  id="txtUserAccount"    style="WIDTH: 130px"></TD>
                            <TD style="HEIGHT: 28px" width=80><SPAN 
                  id=RequiredFieldValidator3 
                  style="FONT-WEIGHT: bold; VISIBILITY: hidden; color:#000;">请输入登入名</SPAN></TD>
                          </TR>
                          <TR>
                            <TD style="HEIGHT: 28px;color:#000;">登入密码：</TD>
                            <TD style="HEIGHT: 28px;color:#000;"><INPUT name="txtPassword" type="password"  id="txtPassword" style="WIDTH: 130px"   >
                            </TD>
                            <TD style="HEIGHT: 28px;color:#000;"><SPAN id=RequiredFieldValidator4 
                  style="FONT-WEIGHT: bold; VISIBILITY: hidden; COLOR: white">请输入密码</SPAN></TD>
                          </TR>
                          <TR>
                            <TD style="HEIGHT: 28px;color:#000;">验证码：</TD>
                            <TD style="HEIGHT: 28px;color:#000;"><INPUT name="txtValidCode" type="text" maxlength="4" id="txtValidCode"    style="WIDTH: 130px" ></TD>
                            <TD style="HEIGHT: 28px"> <img id="txtValidCode" class="Validate" alt="验证码图片" onclick="this.src=this.src+'?'" src="./code.php"  style="height:27px;margin-top:-4px;width:80px;border-width:0px;" /></TD>
                          </TR>

                          <TR>
                            <TD></TD>
                            <TD colspan="2"><INPUT  name="Btn_Login" value="登录" id="Btn_Login"        style="BORDER-TOP-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-RIGHT-WIDTH: 0px"        type=image src="./images/login_button.gif" > <a href="getpassword.php" style="color:#000; font-size:14px; line-height:46px;">忘记密码？</a></TD>
                          </TR>
                        </TBODY>
                      </TABLE></TD>
                  </TR>
                </TBODY>
              </TABLE></TD>
          </TR>
          <TR>
            <TD></TD>
          </TR>
        </TBODY>
        
</FORM>
        
      </TABLE>

<!-- 手机端登陆样式 结束 -->














<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="./newr/js/jquery-1.7.2.min.js"></script>
<script src="./newr/js/excanvas.min.js"></script>
<script src="./newr/js/jquery.flot.js"></script>
<script src="./newr/js/jquery.flot.pie.js"></script>
<script src="./newr/js/jquery.flot.orderBars.js"></script>
<script src="./newr/js/jquery.flot.resize.js"></script>
<script src="./newr/js/bootstrap.js"></script>
<script src="./newr/js/charts/bar.js"></script>
</body>
</html>
