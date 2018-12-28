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
<title>乐游城会员管理系统</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<link href="./css/bootstrap.min.css" rel="stylesheet" />
<link href="./css/bootstrap-responsive.min.css" rel="stylesheet" />

<link href="./css/font-awesome.css" rel="stylesheet" />
<link href="./css/adminia.css" rel="stylesheet" />
<link href="./css/adminia-responsive.css" rel="stylesheet" />
<link href="./css/pages/dashboard.css" rel="stylesheet" />
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
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<SCRIPT language=javascript>

function SetFocus()
{
if (document.form1.username.value=="")
    document.form1.username.focus();
else
    document.form1.username.select();
}
function CheckForm()
{
    if(document.form1.username.value=="")
    {
        alert("请输入用户名！");
        document.form1.username.focus();
        return false;
    }
    if(document.form1.password.value == "")
    {
        alert("请输入密码！");
        document.form1.password.focus();
        return false;
    }
}
</SCRIPT>
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
<FORM id=form1 name=form1 onSubmit="CheckForm();" action="index.asp" method=post>

    <DIV id=div1 
style="LEFT: 0px; POSITION: absolute; TOP: 0px; BACKGROUND-COLOR: #E96A0A"></DIV>
    <DIV id=div2 
style="LEFT: 0px; POSITION: absolute; TOP: 0px; BACKGROUND-COLOR: #E96A0A"></DIV>
    <SCRIPT language=JavaScript> 
var speed=20;
var temp=new Array(); 
var clipright=document.body.clientWidth/2,clipleft=0 
for (i=1;i<=2;i++){ 
	temp[i]=eval("document.all.div"+i+".style");
	temp[i].width=document.body.clientWidth/2;
	temp[i].height=document.body.clientHeight;
	temp[i].left=(i-1)*parseInt(temp[i].width);
} 
function openit(){ 
	clipright-=speed;
	temp[1].clip="rect(0 "+clipright+" auto 0)";
	clipleft+=speed;
	temp[2].clip="rect(0 auto auto "+clipleft+")";
	if (clipright<=0)
		clearInterval(tim);
} 
tim=setInterval("openit()",100);
                </SCRIPT>
    <DIV>&nbsp;&nbsp; </DIV>
    <DIV>
      <TABLE cellSpacing=0 cellPadding=0 width=900 align=center border=0>
        <TBODY>
          <TR>
            <TD style="HEIGHT: 105px"><IMG src="images/login_1.gif" 
  border=0></TD>
          </TR>
          <TR>
            <TD background=images/login_2.jpg height=300><TABLE height=300 cellPadding=0 width=900 border=0>
                <TBODY>
                  <TR>
                    <TD colSpan=2 height=100></TD>
                  </TR>
                  <TR>
                    <TD width=360></TD>
                    <TD><form name="form1" method="post" action="Index.php" id="form1" onSubmit="return CheckForm()">
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
                <li><input type="submit" name="Btn_Login" value="登录" id="Btn_Login" class="loginbtn" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </li>
            </ul>
        </div> 
    </div>
</form></TD>
                  </TR>
                </TBODY>
              </TABLE></TD>
          </TR>
          <TR>
            <TD><IMG src="images/login_3.jpg" 
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
        <TBODY>
          
          <TR>
            <TD height=300><TABLE height=300 cellPadding=0 width=320 border=0>
                <TBODY>
                  <TR>
                    <TD colSpan=2 height=50></TD>
                  </TR>
                  <TR>
                    
                    <TD><TABLE cellSpacing=0 cellPadding=2 border=0>
                        <TBODY>
                          <TR>
                            <TD style="HEIGHT: 28px; color:#000;" width=80>登 入 名：</TD>
                            <TD style="HEIGHT: 28px; color:#000;" width=150><INPUT id=Username 
                  style="WIDTH: 130px" name=Username></TD>
                            <TD style="HEIGHT: 28px" width=80><SPAN 
                  id=RequiredFieldValidator3 
                  style="FONT-WEIGHT: bold; VISIBILITY: hidden; color:#000;">请输入登入名</SPAN></TD>
                          </TR>
                          <TR>
                            <TD style="HEIGHT: 28px;color:#000;">登入密码：</TD>
                            <TD style="HEIGHT: 28px;color:#000;"><INPUT id=password style="WIDTH: 130px" 
                  type=password name=password>
                              <input name="loginnow"  type="hidden" value="loginnow"/></TD>
                            <TD style="HEIGHT: 28px;color:#000;"><SPAN id=RequiredFieldValidator4 
                  style="FONT-WEIGHT: bold; VISIBILITY: hidden; COLOR: white">请输入密码</SPAN></TD>
                          </TR>
                          <TR>
                            <TD style="HEIGHT: 28px;color:#000;">验证码：</TD>
                            <TD style="HEIGHT: 28px;color:#000;"><INPUT id=inuptCN 
                  style="WIDTH: 130px" name=inuptCN></TD>
                            <TD style="HEIGHT: 28px"><input type="image" name="inuptCN" id="ImageButton1" src="http://www.bxf716.com/code.php" style="border-width:0px; margin-top:-3px;" height="16" /></TD>
                          </TR>
                          <TR>
                            <TD style="HEIGHT: 18px"></TD>
                            <TD style="HEIGHT: 18px"></TD>
                            <TD style="HEIGHT: 18px"></TD>
                          </TR>
                          <TR>
                            <TD></TD>
                            <TD><INPUT id=btn 
                  style="BORDER-TOP-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-RIGHT-WIDTH: 0px" 
                  onclick='javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("btn", "", true, "", "", false, false))' 
                  type=image src="images/login_button.gif" name=btn></TD>
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
      </TABLE>

<!-- 手机端登陆样式 结束 -->














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
