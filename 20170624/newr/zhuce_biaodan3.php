<?php
include_once("../class/ulevel_class.php");
include_once("../class/system_class.php");
session_start();
$information=que_select_cl('information',1);
$member = getMemberbyID($_SESSION['ID']);
//var_dump($_SESSION['ID']);
$ul = ulevel($member['ulevel']);
$sql = "select * from goods where lx = 2 order by id";
$result = mysql_query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'header.php';?>
</head>
 
<body>

<div id="content">
  <div class="container">
    <div class="row">
   
      <div class="span9" >
	  
	  <div class="widget">

           <div class="page-header">
            <h1>会员申请表</h1>
          </div>

                                     
                           
           
<div class="widget-content">
								
								
								
								<div class="tabbable">

						<br>
						
<div class="well">
                            


<font color="#FF0000" size="4"><font size="3">&nbsp;填写说明</font><strong>：</strong></font>
  <p class="style3">一、如果您注册成为黎民商城会员，请您立即付款，付款金额在您注册结束后显示，如不及时付款，将影响您的业务进程，本黎民商城会员系统将删除您的注册信息，谢谢合作！</p>
  <p class="style3">二、标有"(<font color="#FF0000">*</font>)"符号的栏目必须填写清楚。一定要明确推荐人姓名以及编号，不知推荐人编号的则由黎民商城会员系统补填。</p>
  <p class="style3">三、填写的密码一定不要与你的银行卡密码相同或类似，强烈建议使用字母和数字混合的密码！！！</p>
	                        





	                        </div>
							
	
           <div class="page-header">
            <h1>会员申请表</h1>
          </div>					

							<div class="tab-content">
								<div class="tab-pane active" id="1">
	<script>
	//调用插件
	$(function(){
		$("#test").ProvinceCity();
	});
  </script>
<script language="javascript">
<!--
	$(document).ready(function(){
		$("#classification").change(function(){
			var cid=$(this).val();
			$("#menuSpan").load("shengshijilian.php?cid="+cid);
		});
	})
// function GetNickName()
// {
// 		var rnd="";
// 		var aaa="";
// 		for(var i=0;i<6;i++)
// 		rnd+=Math.floor(Math.random()*10);
// 		aaa="CF"+rnd;
// 		document.form1.NickName.value=aaa;
// 		document.form1.UserID.value=aaa;
// }
function checknickname(lx)
{
	var iframe = document.getElementById("iframe");
	if(lx==1){
		var user =  document.getElementById("bdName");
		iframe.src= "checknickname.php?lx="+lx+"&nickname="+user.value;
	}else if(lx==2){
		var user =  document.getElementById("rName");
		iframe.src= "checknickname.php?lx="+lx+"&nickname="+user.value;	
	}else if(lx==3){
		var user =  document.getElementById("FatherName");
		iframe.src= "checknickname.php?lx="+lx+"&nickname="+user.value;	
	}else if(lx==4){
		var user =  document.getElementById("UserID");
		iframe.src= "checknickname.php?lx="+lx+"&nickname="+user.value;	
	}
}

function Check(formName){
	bdName=document.form1.bdName.value;
	rName=document.form1.rName.value;
	FatherName=document.form1.FatherName.value;
//	UserID=document.form1.UserID.value;
	UserID=document.form1.NickName.value;
	NickName=document.form1.NickName.value;
	password1=document.form1.password1.value;
	password12=document.form1.password12.value;
	password2=document.form1.password2.value;
	password22=document.form1.password22.value;
	password3=document.form1.password3.value;
	password32=document.form1.password32.value;
	passAnswer=document.form1.passAnswer.value;
	UserCard=document.form1.UserCard.value;
	UserName=document.form1.UserName.value;
	UserTel=document.form1.UserTel.value;
	UserAddress=document.form1.UserAddress.value;
	BankCard=document.form1.BankCard.value;
	BankUserName=document.form1.BankUserName.value;
	BankAddress=document.form1.BankAddress.value;
	useremail=document.form1.useremail.value;
	if(formName=="bdName"){
		if(bdName.length == 0){
			document.getElementById('bdNamelabel').innerText="请输入服务中心编号";
		}else{
			document.getElementById('bdNamelabel').innerText="";
		}
	}
	if(formName=="rName"){
		if(rName.length == 0){
			document.getElementById('rNamelabel').innerText="请输入推荐人编号";
		}else{
			document.getElementById('rNamelabel').innerText="";
		}
	}
// 	if(formName=="FatherName"){
// 		if(FatherName.length == 0){
// 			document.getElementById('FatherNamelabel').innerText="请输入接点人编号";
// 		}else{
// 			document.getElementById('FatherNamelabel').innerText="";
// 		}
// 	}
	if(formName=="NickName"){
		if(NickName.length == 0){
			document.getElementById('NickNamelabel').innerText="请输入会员编号";
		}else{
			document.getElementById('NickNamelabel').innerText="";
		}
	}
	if(formName=="password1"){
		if(password1.length == 0){
			document.getElementById('password1label').innerText="请输入一级密码";
		}else{
			if(password1.length <= 5){
				document.getElementById('password1label').innerText="密码小于6位";
			}else{
				document.getElementById('password1label').innerText="";
			}
		}

	}
	if(formName=="password12"){
		if(password12.length == 0){
			document.getElementById('password12label').innerText="请确认一级密码";
		}else{
			if(password12.length <= 5){
				document.getElementById('password12label').innerText="密码小于6位";
			}else{
				if(password1 != password12){
					document.getElementById('password12label').innerText="一级密码输入不一致";
				}else{
					document.getElementById('password12label').innerText="";
				}
			}
		}
	}
	if(formName=="password2"){
		if(password2.length == 0){
			document.getElementById('password2label').innerText="请输入二级密码";
		}else{
			if(password2.length <= 5){
				document.getElementById('password2label').innerText="密码小于6位";
			}else{
				document.getElementById('password2label').innerText="";
			}
		}
	}
	if(formName=="password22"){
		if(password22.length == 0){
			document.getElementById('password22label').innerText="请确认二级密码";
		}else{
			if(password22.length <= 5){
				document.getElementById('password22label').innerText="密码小于6位";
			}else{
				if(password2 != password22){
					document.getElementById('password22label').innerText="二级密码输入不一致";
				}else{
					document.getElementById('password22label').innerText="";
				}
			}
		}
	}
	if(formName=="password3"){
		if(password3.length == 0){
			document.getElementById('password3label').innerText="请输入三级密码";
		}else{
			if(password3.length <= 5){
				document.getElementById('password3label').innerText="密码小于6位";
			}else{
				document.getElementById('password3label').innerText="";
			}
		}
	}
	if(formName=="password32"){
		if(password32.length == 0){
			document.getElementById('password32label').innerText="请确认三级密码";
		}else{
			if(password32.length <= 5){
				document.getElementById('password32label').innerText="密码小于6位";
			}else{
				if(password3 != password32){
					document.getElementById('password32label').innerText="三级密码输入不一致";
				}else{
					document.getElementById('password32label').innerText="";
				}
			}
		}
	}
	
// 	if(formName=="UserCard"){
// 		if(UserCard.length == 0){
// 			document.getElementById('UserCardlabel').innerText="请输入身份证号码";
// 		}else{
// 			document.getElementById('UserCardlabel').innerText="";
// 		}
// 	}
	if(formName=="UserName"){
		if(UserName.length == 0){
			document.getElementById('UserNamelabel').innerText="请输入会员姓名";
		}else{
			document.getElementById('UserNamelabel').innerText="";
		}
	}
	if(formName=="UserTel"){
		if(UserTel.length == 0){
			document.getElementById('UserTellabel').innerText="请输入联系电话";
		}else{
			document.getElementById('UserTellabel').innerText="";
		}
	}
	if(formName=="UserAddress"){
		if(UserAddress.length == 0){
			document.getElementById('UserAddresslabel').innerText="请输入详细收货地址";
		}else{
			document.getElementById('UserAddresslabel').innerText="";
		}
	}
// 	if(formName=="BankCard"){
// 		if(BankCard.length == 0){
// 			document.getElementById('BankCardlabel').innerText="请输入开户帐号";
// 		}else{
// 			document.getElementById('BankCardlabel').innerText="";
// 		}
// 	}
// 	if(formName=="BankUserName"){
// 		if(BankUserName.length == 0){
// 			document.getElementById('BankUserNamelabel').innerText="请输入开户姓名";
// 		}else{
// 			document.getElementById('BankUserNamelabel').innerText="";
// 		}
// 	}
// 	if(formName=="BankAddress"){
// 		if(BankAddress.length == 0){
// 			document.getElementById('BankAddresslabel').innerText="请输入开户地址";
// 		}else{
// 			document.getElementById('BankAddresslabel').innerText="";
// 		}
// 	}
	if(formName=="useremail"){
		if(useremail.length == 0){
			document.getElementById('useremaillabel').innerText="请输入电子邮箱";
		}else{
			document.getElementById('useremaillabel').innerText="";
		}
	}
}

function CheckForm(){
	bdName=document.form1.bdName.value;
	rName=document.form1.rName.value;
	FatherName=document.form1.FatherName.value;
//	UserID=document.form1.UserID.value;
	UserID=document.form1.NickName.value;
	NickName=document.form1.NickName.value;
	password1=document.form1.password1.value;
	password12=document.form1.password12.value;
	password2=document.form1.password2.value;
	password22=document.form1.password22.value;
	password3=document.form1.password3.value;
	password32=document.form1.password32.value;
	passAnswer=document.form1.passAnswer.value;
	UserCard=document.form1.UserCard.value;
	UserName=document.form1.UserName.value;
	UserTel=document.form1.UserTel.value;
	UserAddress=document.form1.UserAddress.value;
	BankCard=document.form1.BankCard.value;
	BankUserName=document.form1.BankUserName.value;
	BankAddress=document.form1.BankAddress.value;
	useremail=document.form1.useremail.value;
	if(bdName.length == 0){
		alert("温馨提示:\n请输入服务中心编号.");
		document.form1.bdName.focus();
		return false;
	}
	if(rName.length == 0){
		alert("温馨提示:\n请输入推荐人编号.");
		document.form1.rName.focus();
		return false;
	}
// 	if(FatherName.length == 0){
// 		alert("温馨提示:\n请输入接点人编号.");
// 		document.form1.FatherName.focus();
// 		return false;
// 	}
// 	if(UserID.length == 0){
// 		alert("温馨提示:\n请输入会员编号.");
// 		document.form1.UserID.focus();
// 		return false;
// 	}
	if(NickName.length == 0){
		alert("温馨提示:\n请输入会员编号.");
		document.form1.NickName.focus();
		return false;
	}
	if(password1.length == 0){
		alert("温馨提示:\n请输入一级密码.");
		document.form1.password1.focus();
		return false;
	}
	if(password1.length <= 5){
		alert("温馨提示:\n密码小于6位.");
		document.form1.password1.focus();
		return false;
	}
	if(password12.length == 0){
		alert("温馨提示:\n请确认一级密码.");
		document.form1.password12.focus();
		return false;
	}
	if(password12.length <= 5){
		alert("温馨提示:\n密码小于6位.");
		document.form1.password12.focus();
		return false;
	}
	if(password12 != password1){
		alert("温馨提示:\n一级密码输入不一致.");
		document.form1.password12.focus();
		return false;
	}
	if(password2.length == 0){
		alert("温馨提示:\n请输入二级密码.");
		document.form1.password2.focus();
		return false;
	}
	if(password2.length <= 5){
		alert("温馨提示:\n密码小于6位.");
		document.form1.password2.focus();
		return false;
	}
	if(password22.length == 0){
		alert("温馨提示:\n请确认二级密码.");
		document.form1.password22.focus();
		return false;
	}
	if(password22.length <= 5){
		alert("温馨提示:\n密码小于6位.");
		document.form1.password22.focus();
		return false;
	}
	if(password22 != password2){
		alert("温馨提示:\n二级密码输入不一致.");
		document.form1.password22.focus();
		return false;
	}
//	if(password3.length == 0){
//		alert("温馨提示:\n请输入三级密码.");
//		document.form1.password3.focus();
//		return false;
//	}
//	if(password3.length <= 5){
//		alert("温馨提示:\n密码小于6位.");
//		document.form1.password3.focus();
//		return false;
//	}
////	if(password32.length == 0){
//		alert("温馨提示:\n请确认三级密码.");
//		document.form1.password32.focus();
//		return false;
//	}
//	if(password32.length <= 5){
//		alert("温馨提示:\n密码小于6位.");
//		document.form1.password32.focus();
//		return false;
//	}
//	if(password32 != password3){
//		alert("温馨提示:\n三级密码输入不一致.");
//		document.form1.password32.focus();
//		return false;
//	}

// 	if(UserCard.length == 0){
// 		alert("温馨提示:\n请输入身份证号码.");
// 		document.form1.UserCard.focus();
// 		return false;
// 	}
	if(UserName.length == 0){
		alert("温馨提示:\n请输入会员姓名.");
		document.form1.UserName.focus();
		return false;
	}
	if(UserTel.length == 0){
		alert("温馨提示:\n请输入联系电话.");
		document.form1.UserTel.focus();
		return false;
	}
	if(UserAddress.length == 0){
		alert("温馨提示:\n请输入详细收货地址.");
		document.form1.UserAddress.focus();
		return false;
	}
// 	if(BankCard.length == 0){
// 		alert("温馨提示:\n请输入开户帐号.");
// 		document.form1.BankCard.focus();
// 		return false;
// 	}
// 	if(BankUserName.length == 0){
// 		alert("温馨提示:\n请输入开户姓名.");
// 		document.form1.BankUserName.focus();
// 		return false;
// 	}
// 	if(BankAddress.length == 0){
// 		alert("温馨提示:\n请输入开户地址.");
// 		document.form1.BankAddress.focus();
// 		return false;
// 	}
	if(useremail.length == 0){
		alert("温馨提示:\n请输入电子信箱.");
		document.form1.useremail.focus();
		return false;
	}
//	if(classification.value == 0){
//		alert("温馨提示:\n请选择所在省份.");
//		return false;
//	}
//	if(menu.value == 0){
//		alert("温馨提示:\n请选择所在城市.");
//		return false;
//	}
	return true;
}
-->
</script>
<?php
$_system=new system_class();
$sys=$_system->system_information(1);
?>
<body onLoad="GetNickName();">
<form id="form1" name="form1" method="post" action="register3.php" onSubmit="return CheckForm();">
<table  width="100%" height="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="form-horizontal">
	<tr>
    <td colspan="2" align="center" style="color:red;">*为必填项目<iframe name="iframe" id="iframe" width="0" height="0" src="about:blank" style="display:none"></iframe></td>
    </tr>
    <?php
    $sql="SELECT id,isbd,bdname FROM member where nickname='".$_GET['rn']."'";
    $uss = getOne($sql);
    if($uss['isbd']==2){$admin=$_GET['rn'];}else {$admin=$uss['bdname'];}
    	
	?>
	<tr >
	  <td width="42%" align="right">服务中心编号：</td>
	  <td width="58%" align="left"><input name="bdName" type="text" id="bdName" value="<?php echo $admin?>" maxlength="15" />
&nbsp;<span id="span">(*)</span>&nbsp;<label id="bdNamelabel"/>
</td>
    </tr>
    <?php
    	$rn=$_GET['rn'];
		if($rn==""){$rn=$_SESSION['nickname'];}
	?>
	<tr>
    <td align="right">推荐人编号：</td>
    <td align="left">
      <input name="rName" type="text" id="rName" value="<?php echo $rn?>" maxlength="15"/>
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="rnamelable"/>
        <!-- <input name="button2" type="button" class="button_blue" id="button2" onclick='checknickname(2);' value="验  证"> -->
      </td>
  </tr>
  <tr style="display: none">
    <td align="right">接点人编号：</td>
    <td align="left">
      <input name="FatherName" type="text" id="FatherName"  value="<?=$_GET['nickname']?>" maxlength="15"/>
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="FatherNamelabel"/>
        <!-- <input name="button3" type="button" class="button_blue" id="button3" onclick='checknickname(3);' value="验  证"> -->
      </td>
  </tr>
  <tr style="display: none">
    <td align="right">安置区域：</td>
    <td align="left">
      <select name="TreePlace" id="TreePlace">
        <option value="1" <?php if($_GET['tid']==1){?>selected<?php }?>>A区</option>
        <option value="2" <?php if($_GET['tid']==2){?>selected<?php }?>>B区</option>
        <option value="3" <?php if($_GET['tid']==3){?>selected<?php }?>>C区</option> 
        <option value="4" <?php if($_GET['tid']==4){?>selected<?php }?>>D区</option> 
        <option value="5" <?php if($_GET['tid']==5){?>selected<?php }?>>F区</option> 
      </select></td>
  </tr>
   <tr >
    <td align="right">加盟资格：</td>
    <td align="left">
      <select name="uLevel" id="uLevel">
      <?php
		$_ulevel=new ulevel_class();
      	for($i=1;$i<=1;$i++){
			$ul=$_ulevel->getulevelbyulevel($i);
	  ?>
        <option value="<?=$i?>"><?=$ul['lvname']?>[￥<?=$ul['lsk']?>]</option>
        <?php
		}
		?>
      </select></td>
  </tr>
  <tr>
    <td colspan="2" align="center">密码</td>
    </tr>
  <tr>
    <td align="right">一级密码：</td>
    <td align="left"><input name="password1" type="password" id="password1" onBlur="Check('password1');" value="<?=$sys['password1']?>" maxlength="20"/>
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="password1label"/></td>
  </tr>
  <tr>
    <td align="right">确认一级密码：</td>
    <td align="left"><input name="password12" type="password" id="password12" onBlur="Check('password12');" value="<?=$sys['password1']?>" maxlength="20"/>
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="password12label"/></td>
  </tr>
  <tr>
    <td align="right">二级密码：</td>
    <td align="left"><input name="password2" type="password" id="password2" onBlur="Check('password2');" value="<?=$sys['password2']?>" maxlength="20"/>
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="password2label"/></td>
  </tr>
  <tr>
    <td align="right">确认二级密码：</td>
    <td align="left"><input name="password22" type="password" id="password22" onBlur="Check('password22');" value="<?=$sys['password2']?>" maxlength="20"/>
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="password22label"/></td>
  </tr>
  <tr style="display:none">
    <td align="right">三级密码：</td>
    <td align="left"><input name="password3" type="password" id="password3" onBlur="Check('password3');" value="333333" maxlength="20"/>
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="password3label"/></td>
  </tr>
  <tr style="display:none">
    <td align="right">确认三级密码：</td>
    <td align="left"><input name="password32" type="password" id="password32" onBlur="Check('password32');" value="333333" maxlength="20"/>
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="password32label"/></td>
  </tr>
  <tr style="display: none">
    <td align="right">密码安全问题：</td>
    <td align="left"><input name="passQuestion" type="text" id="passQuestion" onBlur="Check('passQuestion');" value="" maxlength="50"/>
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="passQuestionlabel"/></td>
  </tr>
  <tr style="display: none">
    <td align="right">密码安全答案：</td>
    <td align="left"><input name="passAnswer" type="text" id="passAnswer" onBlur="Check('passAnswer');" value="" maxlength="50"/>
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="passAnswerlabel"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center">会员资料</td>
    </tr>

  
  <tr >
    <td align="right">会员编号：</td>
    <td align="left"><input name="NickName" type="text" id="NickName" onBlur="Check('NickName');" onKeyUp="value=value.replace(/[\W]/g,'')" placeholder="请填写会员编号"  value="" maxlength="20" />
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="NickNamelabel"/></td>
  </tr>
  <tr>
    <td align="right">会员姓名：</td>
    <td align="left"><input name="UserName" type="text" id="UserName" onBlur="Check('UserName');" value="168" maxlength="10"/>
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="UserNamelabel"/></td>
  </tr>
  <tr style="display: none">
    <td align="right">身份证号码：</td>
    <td align="left"><input name="UserCard" type="text" id="UserCard"  onblur="Check('UserCard');" value="168" maxlength="20" onKeyUp="showBirthday(this)" />
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="UserCardlabel"/></td>
  </tr>
  <tr style="display: none">
    <td align="right">性别：</td>
    <td align="left">男
      <input name="sex" type="radio" id="sex" value="1" checked>
      女
      <label for="radio">
        <input type="radio" name="sex" id="sex" value="0">
      </label></td>
  </tr>
  <tr style="display: none">
    <td align="right">出生日期：</td>
    <td align="left"><label for="select"></label>
      <select name="nian" id="nian">
      <?php for($i=1930;$i<=2030;$i++){?>
        <option value="<?=$i?>"><?=$i?></option>
        <?php }?>
      </select>
      年
      <select name="yue" id="yue">
      <?php for($i=1;$i<=12;$i++){?>
        <option value="<?=$i?>"><?=$i?></option>
        <?php }?>
      </select>
      月
      <select name="ri" id="ri">
      <?php for($i=1;$i<=31;$i++){?>
        <option value="<?=$i?>"><?=$i?></option>
        <?php }?>
      </select>
      日</td>
  </tr>
  <tr style="display: none">
    <td align="right">学历：</td>
    <td align="left">
      <select name="xueli" id="xueli">
        <option value="小学">小学</option>
        <option value="初中">初中</option>
        <option value="高中">高中</option>
        <option value="中专">中专</option>
        <option value="大学">大学</option>
        <option value="本科">本科</option>
      </select>
      </td>
  </tr>
  <tr  style="display: none">
    <td colspan="2" align="center">通讯地址</td>
    </tr>
    
   <tr style="display: none">
  	<td align="right">联系地址：</td>
    <td align="left">
    <select id="province" name="province">
    	
    	<?php 
    		$sql="select * from province";
    		$ra=getAll($sql);
    		foreach($ra as $rs){
    	?>
    	
    	<option value="<?php echo $rs['provinceid'];?>"  ><?php echo $rs['province']?></option>
    	<?php }?>
    </select>
    <select name="city" id="city">
  
    </select>
     <select name="county" id="county">
    	
    </select>
    </td>
  </tr>
  <tr >
    <td align="right">收货详细地址：</td>
    <td align="left"><input name="UserAddress" type="text" id="UserAddress" onBlur="Check('UserAddress');" value="168" maxlength="50"/>
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="UserAddresslabel"/></td>
  </tr>
  <tr >
    <td align="right">联系电话：</td>
    <td align="left"><input name="UserTel" type="text" id="UserTel" onBlur="Check('UserTel');" value="168" maxlength="20"/>
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="UserTellabel"/></td>
  </tr>
  <tr >
    <td align="right">电子邮箱：</td>
    <td align="left"><input name="useremail" type="text" id="useremail" onBlur="Check('useremail');" value="168" maxlength="50"/>
       &nbsp;<span id="span">(*)</span>&nbsp;
       <label id="useremaillabel"/></td>
  </tr>
  
 
  <tr>
    <td colspan="2" align="center">银行账户资料</td>
    </tr>
    <tr>
    <td align="right">开户帐号：</td>
    <td align="left">
      <select name="bankname" id="bankname">
    

        <option value="中国农业银行">中国农业银行</option>
        <option value="中国工商银行">中国工商银行</option>
        <option value="中国招商银行">中国招商银行</option>
        <option value="中国建设银行">中国建设银行</option>
        <option value="中国华夏银行">中国华夏银行</option>
        <option value="中国交通银行">中国交通银行</option>
        <option value="中国农商银行">中国农商银行</option>
        <option value="中国邮政储蓄">中国邮政储蓄</option>
        
        <option value="中国银行">中国银行</option>
      </select></td>
  </tr>
  <tr>
    <td align="right">开户帐号：</td>
    <td align="left"><input name="BankCard" type="text" id="BankCard" onBlur="Check('BankCard');" value="168" maxlength="20"/>
    <!-- 
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="BankCardlabel"/> --></td>
  </tr>
  <tr>
    <td align="right">开户姓名：</td>
    <td align="left"><input name="BankUserName" type="text" id="BankUserName" onBlur="Check('BankUserName');" value="168" maxlength="20"/>
    <!--  
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="BankUserNamelabel"/>--></td>
  </tr>
  <tr>
    <td align="right">开户地址：</td>
    <td align="left"><input name="BankAddress" type="text" id="BankAddress" onBlur="Check('BankAddress');" value="168" maxlength="50"/>
      <!--  &nbsp;<span  id="span">(*)</span>&nbsp;<label id="BankAddresslabel"/>--></td>
  </tr>
  <tr >
    <td align="right">支付宝：</td>
    <td align="left"><input name="zhifubao" type="text" id="zhifubao" value="168" maxlength="50"/></td>
  </tr>
  <tr >
    <td align="right">微信号：</td>
    <td align="left"><input name="caifutong" type="text" id="caifutong"  value="168" maxlength="50"/></td>
  </tr>
  <!--  
  </table>
  
 <table   width="100%" height="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="form-horizontal">
  <tr>
  	<td align="center">选择</td>
  	<td align="center">名称</td>
  	<td align="center">金额</td>
  	<td align="center">数量</td>
  	<td align="center">详细信息</td>
  </tr>
 <?php 
 	while ($goods = mysql_fetch_assoc($result)){
 ?>
 <tr>
 	<td align="center" ><input type="checkbox" name="UID[]" id="UID" value="<?=$goods['id']?>"></td>
    <td align="center"><?php echo $goods['goodsname']?></td>
    <td align="center"><?php echo $goods['price']?></td>
    <td align="center" ><input type="text" name="<?=$goods['id']?>num" value="1" size="5" maxlength="4"></td>
    <td align="center" ><a href='goodscontent.php?id=<?=$goods['id']?>' style='text-decoration:none'>查看</a></td>
 </tr>
 <?php }?>
  -->
  <tr>
    <td colspan="5" align="center">
    <input name="submit" type="submit" class="button_green" value="注  册" id="submit" onClick="javascript:return confirm('您确认注册吗？请确认信息填写完整正确.');">
    </td>
  </tr>
</table>
</form>
								</div>
								
								
								
							</div>
						  
						  

								
								
								
								
								

                        
                    </div>
                        
                        

                    
                    
                </div>	  

      </div>
      <!-- /span9 -->
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<!-- /content -->

</body>
</html>

