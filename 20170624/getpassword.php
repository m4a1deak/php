<?php
include("function.php");
header("Content-Type: text/html;charset=utf-8");
session_start();
unset($_SESSION['text']); 
unset($_SESSION['passanswer']); 
unset($_SESSION['passquestion']);

if ($_POST['button']){
//if ($_POST['loginnow'] == "loginnow"){
	
		
			if (checkQuestion($_POST['text'],$_POST['passquestion'],$_POST['passanswer'])){
				
				$us=getMemberbyNickName($_POST['text']);
				
				$nickname=$us['nickname'];
			    $password1=$us['zb1'];
				$password2=$us['zb4'];
			
				
			
			 echo "<script language=javascript>alert('会员编号: $nickname   \\n一级密码：$password1 \\n二级密码；$password2');window.location.href='?'</script>";
			}else{
				echo "<script language=javascript>alert('用户名或密保问题或答案错误.');window.location.href='?'</script>";
			}
		
	
}else{
	
	$_SESSION['nickname']=null;
	$_SESSION['passanswer']=null;
		
}


	

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>乐游城会员管理系统</title>
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
	text=document.form1.text.value;
	
	if(text.length == 0){
		alert("请输入会员编号.");
		document.form1.text.focus();
		return false;
	}

	passanswer=document.form1.passanswer.value;
	
	if(passanswer.length == 0){
		alert("请输入密保答案.");
		document.form1.passanswer.focus();
		return false;
	}
	passquestion=document.form1.passquestion.value;
	
	if(passquestion.length == 0){
		alert("请输入密保答案.");
		document.form1.passquestion.focus();
		return false;
	}
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

                    <form name="form1" method="post" action="getpassword.php" id="form1" onsubmit="return CheckForm()">
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
            <TD background=./images/login_22.jpg height=300><TABLE height=300 cellPadding=0 width=900 border=0>
                <TBODY>
                  <TR>
                    <TD colSpan=2 height=100></TD>
                  </TR>
                  <TR>
                    <TD width=360></TD>
                    <TD><TABLE cellSpacing=0 cellPadding=2 border=0>
                        <TBODY>
                          <TR>
                            <TD style="HEIGHT: 28px" width=80>会员编号:</TD>
                            <TD style="HEIGHT: 28px" width=150><INPUT name="text" type="text"  id="text"  style="WIDTH: 130px"></TD>
                            <TD style="HEIGHT: 28px" width=370><SPAN  id=RequiredFieldValidator3     style="FONT-WEIGHT: bold; VISIBILITY: hidden; COLOR: white">请输入登入名</SPAN></TD>
                          </TR>
                          <TR>
                            <TD style="HEIGHT: 28px">密保问题:</TD>
                            <TD style="HEIGHT: 28px"><INPUT  name="passquestion" type="text"  id="passquestion"    style="WIDTH: 130px"   >
                              <input name="loginnow"  type="hidden" value="loginnow"/></TD>
                            <TD style="HEIGHT: 28px"><SPAN id=RequiredFieldValidator4 
                  style="FONT-WEIGHT: bold; VISIBILITY: hidden; COLOR: white">请输入密码</SPAN></TD>
                          </TR>
                          <TR>
                            <TD style="HEIGHT: 28px">密保答案:</TD>
                            <TD style="HEIGHT: 28px"><INPUT  name="passanswer" type="text"  id="passanswer"   style="WIDTH: 130px" ></TD>
                            <TD style="HEIGHT: 28px"></TD>
                          </TR>

                          <TR>
                            <TD></TD>
                            <TD colspan="2"><INPUT  name="button" value="确定" id="button"       style="BORDER-TOP-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-RIGHT-WIDTH: 0px"        type=image src="./images/login_button22.gif" > <a href="Index.php" style="color:#fff; font-size:14px; line-height:46px;">登录系统</a></TD>
                           
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


                    <form name="form1" method="post" action="getpassword.php" id="form1" onsubmit="return CheckForm()">
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
                            <TD style="HEIGHT: 28px; color:#000;"  width=80>会员编号:</TD>
                            <TD style="HEIGHT: 28px; color:#000;"  width=150><INPUT name="text" type="text"  id="text"  style="WIDTH: 130px"></TD>
                            <TD style="HEIGHT: 28px; color:#000;"  width=80><SPAN  id=RequiredFieldValidator3     style="FONT-WEIGHT: bold; VISIBILITY: hidden; COLOR: white">请输入登入名</SPAN></TD>
                          </TR>
                          <TR>
                            <TD style="HEIGHT: 28px; color:#000;" >密保问题:</TD>
                            <TD style="HEIGHT: 28px; color:#000;" ><INPUT  name="passquestion" type="text"  id="passquestion"    style="WIDTH: 130px"   >
                              <input name="loginnow"  type="hidden" value="loginnow"/></TD>
                            <TD style="HEIGHT: 28px; color:#000;" ><SPAN id=RequiredFieldValidator4 
                  style="FONT-WEIGHT: bold; VISIBILITY: hidden; COLOR: white">请输入密码</SPAN></TD>
                          </TR>
                          <TR>
                            <TD style="HEIGHT: 28px; color:#000;" >密保答案:</TD>
                            <TD style="HEIGHT: 28px; color:#000;" ><INPUT  name="passanswer" type="text"  id="passanswer"   style="WIDTH: 130px" ></TD>
                            <TD style="HEIGHT: 28px; color:#000;" ></TD>
                          </TR>

                          <TR>
                            <TD></TD>
                            <TD colspan="2"><INPUT  name="button" value="确定" id="button"       style="BORDER-TOP-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-RIGHT-WIDTH: 0px"        type=image src="./images/login_button22.gif" > <a href="Index.php" style="color:#000; font-size:14px; line-height:46px;">登录系统</a></TD>
                           
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
