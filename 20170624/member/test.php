<style type="text/css">
body p {
	color: #666;
	font-size: 12px;
}
</style>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/table.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/button.css" />
<title>二级密码验证</title>

</head>
<?php
include("check.php");
include_once("../function.php");
session_start();
$_yid=$_GET["yid"];
if ($_yid == 1){$_html="Personal.php";}
if ($_yid == 2){$_html="yzwt.php";}
if ($_yid == 4){$_html="TeamInformation.php";}
if ($_yid == 5){$_html="treeview.php";}
if ($_yid == 6){$_html="wlt3.php";}
if ($_yid == 11){$_html="xheditor/newsmanage.php";}
if ($_yid == 12){$_html="tixian.php";}
if ($_yid == 14){$_html="chongzhi.php";}
if ($_yid == 16){$_html="zhuanhuan.php";}
if ($_yid == 18){$_html="zhuanzhang.php";}
if ($_yid == 20){$_html="huikuan.php";}
if ($_yid == 23){$_html="mailadd.php";}
if ($_yid == 24){$_html="mailinbox.php";}
if ($_yid == 25){$_html="mailoutbox.php";}
if ($_yid == 26){$_html="admin_mail.php";}
if ($_yid == 29){$_html="Orders.php";}
if ($_yid == 30){$_html="goodslist.php";}
if ($_yid == 32){$_html="introduced.php";}
if ($_yid == 34){$_html="rules.php";}
if ($_yid == 36){$_html="company.php";}
if ($_yid == 37){$_html="bonus.php";}
if ($_yid == 38){$_html="sqfwzx.php";}
if ($_yid == 39){$_html="jihuo.php";}
if ($_yid == 40){$_html="bdmember.php";}
if ($_yid == 41){$_html="admin_bonustime.php";}
if ($_yid == 42){$_html="admin_tixian.php";}
if ($_yid == 43){$_html="admin_huikuan.php";}
if ($_yid == 44){$_html="bdrecord.php";}
if ($_yid == 45){$_html="ulevelup.php";}
if ($_yid == 46){$_html="lsbd.php";}
if ($_yid == 47){$_html="UpdatePassword.php";}
if ($_yid == 48){$_html="bonuslaiyuan.php";}
if ($_yid == 49){$_html="goodslist2.php";}
if ($_yid == 50){$_html="goodslist3.php";}
if ($_yid == 51){$_html="TeamInformation2.php";}
if ($_yid == 52){$_html="wlt2.php";}
if ($_yid == 53){$_html="tuidan.php";}
if ($_yid == 54){$_html="woyaojihuo.php";}
if ($_yid == 55){$_html="linshi.php";}
if ($_yid == 56){$_html="zhengshi.php";}
if ($_yid == 57){$_html="goodslist7.php";}
if ($_yid == 58){$_html="goodslist8.php";}
if ($_yid == 59){$_html="goodslist9.php";}
if ($_yid == 60){$_html="aixinjijin.php";}
if ($_yid == 61){$_html="tuandui.php";}
if ($_yid == 62){$_html="huikuan1.php";}
if ($_yid == 63){$_html="huikuan2.php";}
if ($_yid == 64){$_html="admin_ulevelup.php";}
if ($_yid == 65){$_html="tuanduixinxi.php";}
if ($_yid == 66){$_html="tuanduifufei.php";}
if ($_yid == 67){$_html="shenqingshengji.php";}
if ($_yid == 68){$_html="tuanduijiegou.php";}
if ($_yid == 69){$_html="kaitongxiaji.php";}
if ($_yid == 70){$_html="xiugaiziliao.php";}
//如果输入过2级密码就不需要再输入
if ($_SESSION['pass2'] == 1){
	echo "<script language=javascript>window.location.href='".$_html."'</script>";	
}
//验证二级密码
if($_POST['submit']){
	if (checkPassword2($_SESSION['nickname'],$_POST['password2'])){
		$_SESSION['pass2']=1;
		if ($_html == null){
			echo "<script language=javascript>window.location.href='main.php'</script>";
		}else{
			echo "<script language=javascript>window.location.href='".$_html."'</script>";
		}
	}else{
		echo "<script language=javascript>alert('二级密码错误,请重新输入.');window.location.href='?yid=".$_yid."'</script>";
	}
}
?>
<body>
<form name="form1" method="POST" action="?yid=<?=$_yid?>">
<table width="300" border="0" align="center" cellpadding="3" cellspacing="1" class="table1">
  <tr>
    <td align="center" height="50px"><p style=" color:#F00"><B>请输入二级密码：</B>  
      <input name="password2" type="password" id="password2" size="20"></p></td>
    </tr>
  <tr>
    <td align="center"><input name="submit" type="submit" class="button_green" value="确  认"></td>
    </tr>
  </table>
</form>
</body>
</html>