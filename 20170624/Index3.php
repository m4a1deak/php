<?php
include("function.php");
header("Content-Type: text/html;charset=utf-8");
session_start();

if ($_POST['loginnow'] == "loginnow"){
	
		
			if (checkLogin2($_POST['txtUserAccount'],$_POST['passquestion'],$_POST['passanswer'])){
				$us=getMemberbyNickName($_POST['txtUserAccount']);
			
				$nickname=$us['nickname'];
				$password1=$us['pass1'];
				$password2=$us['pass2'];

					
				
				echo "<script language=javascript>alert('会员编号: $nickname  \\n一级密码: $password1        \\n二级密码:$password2');window.location.href='Index.php?'</script>";
		
				
			}else{
				echo "<script language=javascript>alert('用户名或密码错误.');window.location.href='?'</script>";
			}
		
	
}

?>
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>PHC普惠积分管理平台</title>
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
            <h1>会员管理平台</h1>
            <form name="form1" method="post" action="Index3.php" id="form1" onSubmit="return CheckForm()">
            <INPUT type=hidden value=loginnow name=loginnow> 
                 <input type="text" name="txtUserAccount" class="username" placeholder="用户名">
                 <input type="text" name="passquestion" class="passquestion" placeholder="密码安全问题"> 
                 
                 <input type="text" name="passanswer" class="passanswer" placeholder="密码安全答案"> 
                 
                <button type="Btn_Login">密 码 找 回</button>
                <br></br>
                <div > <a href="Index.php" ><span style="font-family:华文中宋; color:red; ">登录系统</span></a></div>
            </form>
           
        </div>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>

