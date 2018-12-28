<?php
include("function.php");
header("Content-Type: text/html;charset=utf-8");
session_start();
unset($_SESSION['ID']); 
unset($_SESSION['NickName']); 

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
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>乐游城会员管理系统</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/reset.css">
        <link rel="stylesheet" href="assets/css/supersized.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="page-container">
            <h1>乐游城会员管理系统</h1>
            <form name="form1" method="post" action="Index.php" id="form1" onSubmit="return CheckForm()">
            <INPUT type=hidden value=loginnow name=loginnow> 
                 <input type="text" name="txtUserAccount" class="username" placeholder="会员编号">
                 <input type="password" name="txtPassword" class="password" placeholder="密码">
                   
                 <input type="text" name="txtValidCode"  placeholder="验证码" style="height:50px;width:150px;text-align:left;">
                 <img id="txtValidCode" class="Validate" alt="验证码图片" onclick="this.src=this.src+'?'" src="./code.php"  style="height:50px;margin-top:0px; width:110px;vertical-align:middle;" />
                
                <button type="Btn_Login">登 陆</button>
                <br></br>
                <div >
                <!-- 
                <a href="./member/register1.php" ><span style="font-family:华文中宋; color:red; ">会员注册</span></a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 -->
                <a href="Index3.php" ><span style="font-family:华文中宋; color:red; ">忘记密码？</span></a>
                
                
                </div>
            </form>
           
        </div>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>

