<?php
include_once("../class/ulevel_class.php");
include_once("../class/system_class.php");
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/table.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>��Աע��</title>
  <script src='../js/ssjl_jquery.js'></script>
  <script src="../js/shengshixian/jquery.provincesCity.js" type="text/javascript"></script>
  <script src="../js/shengshixian/provincesdata.js" type="text/javascript"></script>
  <script>
	//���ò��
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
function GetNickName()
{
		var rnd="";
		var aaa="";
		for(var i=0;i<8;i++)
		rnd+=Math.floor(Math.random()*10);
		aaa="CN"+rnd;
		document.form1.NickName.value=aaa;
		document.form1.UserID.value=aaa;
}
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
	UserID=document.form1.UserID.value;
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
			document.getElementById('bdNamelabel').innerText="������������ı��";
		}else{
			document.getElementById('bdNamelabel').innerText="";
		}
	}
	if(formName=="rName"){
		if(rName.length == 0){
			document.getElementById('rNamelabel').innerText="�������Ƽ��˱��";
		}else{
			document.getElementById('rNamelabel').innerText="";
		}
	}
	if(formName=="FatherName"){
		if(FatherName.length == 0){
			document.getElementById('FatherNamelabel').innerText="������ӵ��˱��";
		}else{
			document.getElementById('FatherNamelabel').innerText="";
		}
	}
	if(formName=="NickName"){
		if(NickName.length == 0){
			document.getElementById('NickNamelabel').innerText="�������Ա���";
		}else{
			document.getElementById('NickNamelabel').innerText="";
		}
	}
	if(formName=="password1"){
		if(password1.length == 0){
			document.getElementById('password1label').innerText="������һ������";
		}else{
			if(password1.length <= 5){
				document.getElementById('password1label').innerText="����С��6λ";
			}else{
				document.getElementById('password1label').innerText="";
			}
		}

	}
	if(formName=="password12"){
		if(password12.length == 0){
			document.getElementById('password12label').innerText="��ȷ��һ������";
		}else{
			if(password12.length <= 5){
				document.getElementById('password12label').innerText="����С��6λ";
			}else{
				if(password1 != password12){
					document.getElementById('password12label').innerText="һ���������벻һ��";
				}else{
					document.getElementById('password12label').innerText="";
				}
			}
		}
	}
	if(formName=="password2"){
		if(password2.length == 0){
			document.getElementById('password2label').innerText="�������������";
		}else{
			if(password2.length <= 5){
				document.getElementById('password2label').innerText="����С��6λ";
			}else{
				document.getElementById('password2label').innerText="";
			}
		}
	}
	if(formName=="password22"){
		if(password22.length == 0){
			document.getElementById('password22label').innerText="��ȷ�϶�������";
		}else{
			if(password22.length <= 5){
				document.getElementById('password22label').innerText="����С��6λ";
			}else{
				if(password2 != password22){
					document.getElementById('password22label').innerText="�����������벻һ��";
				}else{
					document.getElementById('password22label').innerText="";
				}
			}
		}
	}
	if(formName=="password3"){
		if(password3.length == 0){
			document.getElementById('password3label').innerText="��������������";
		}else{
			if(password3.length <= 5){
				document.getElementById('password3label').innerText="����С��6λ";
			}else{
				document.getElementById('password3label').innerText="";
			}
		}
	}
	if(formName=="password32"){
		if(password32.length == 0){
			document.getElementById('password32label').innerText="��ȷ����������";
		}else{
			if(password32.length <= 5){
				document.getElementById('password32label').innerText="����С��6λ";
			}else{
				if(password3 != password32){
					document.getElementById('password32label').innerText="�����������벻һ��";
				}else{
					document.getElementById('password32label').innerText="";
				}
			}
		}
	}
	
	if(formName=="UserCard"){
		if(UserCard.length == 0){
			document.getElementById('UserCardlabel').innerText="���������֤����";
		}else{
			document.getElementById('UserCardlabel').innerText="";
		}
	}
	if(formName=="UserName"){
		if(UserName.length == 0){
			document.getElementById('UserNamelabel').innerText="�������Ա����";
		}else{
			document.getElementById('UserNamelabel').innerText="";
		}
	}
	if(formName=="UserTel"){
		if(UserTel.length == 0){
			document.getElementById('UserTellabel').innerText="��������ϵ�绰";
		}else{
			document.getElementById('UserTellabel').innerText="";
		}
	}
	if(formName=="UserAddress"){
		if(UserAddress.length == 0){
			document.getElementById('UserAddresslabel').innerText="��������ϵ��ַ";
		}else{
			document.getElementById('UserAddresslabel').innerText="";
		}
	}
	if(formName=="BankCard"){
		if(BankCard.length == 0){
			document.getElementById('BankCardlabel').innerText="�����뿪���ʺ�";
		}else{
			document.getElementById('BankCardlabel').innerText="";
		}
	}
	if(formName=="BankUserName"){
		if(BankUserName.length == 0){
			document.getElementById('BankUserNamelabel').innerText="�����뿪������";
		}else{
			document.getElementById('BankUserNamelabel').innerText="";
		}
	}
	if(formName=="BankAddress"){
		if(BankAddress.length == 0){
			document.getElementById('BankAddresslabel').innerText="�����뿪����ַ";
		}else{
			document.getElementById('BankAddresslabel').innerText="";
		}
	}
	if(formName=="useremail"){
		if(useremail.length == 0){
			document.getElementById('useremaillabel').innerText="�������������";
		}else{
			document.getElementById('useremaillabel').innerText="";
		}
	}
}

function CheckForm(){
	bdName=document.form1.bdName.value;
	rName=document.form1.rName.value;
	FatherName=document.form1.FatherName.value;
	UserID=document.form1.UserID.value;
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
//	if(bdName.length == 0){
//		alert("��ܰ��ʾ:\n������������ı��.");
//		document.form1.bdName.focus();
//		return false;
//	}
	if(rName.length == 0){
		alert("��ܰ��ʾ:\n�������Ƽ��˱��.");
		document.form1.rName.focus();
		return false;
	}
	//if(FatherName.length == 0){
//		alert("��ܰ��ʾ:\n������ӵ��˱��.");
//		document.form1.FatherName.focus();
//		return false;
//	}
	if(UserID.length == 0){
		alert("��ܰ��ʾ:\n�������Ա���.");
		document.form1.UserID.focus();
		return false;
	}
	if(NickName.length == 0){
		alert("��ܰ��ʾ:\n�������Ա���.");
		document.form1.NickName.focus();
		return false;
	}
	if(password1.length == 0){
		alert("��ܰ��ʾ:\n������һ������.");
		document.form1.password1.focus();
		return false;
	}
	if(password1.length <= 5){
		alert("��ܰ��ʾ:\n����С��6λ.");
		document.form1.password1.focus();
		return false;
	}
	if(password12.length == 0){
		alert("��ܰ��ʾ:\n��ȷ��һ������.");
		document.form1.password12.focus();
		return false;
	}
	if(password12.length <= 5){
		alert("��ܰ��ʾ:\n����С��6λ.");
		document.form1.password12.focus();
		return false;
	}
	if(password12 != password1){
		alert("��ܰ��ʾ:\nһ���������벻һ��.");
		document.form1.password12.focus();
		return false;
	}
	if(password2.length == 0){
		alert("��ܰ��ʾ:\n�������������.");
		document.form1.password2.focus();
		return false;
	}
	if(password2.length <= 5){
		alert("��ܰ��ʾ:\n����С��6λ.");
		document.form1.password2.focus();
		return false;
	}
	if(password22.length == 0){
		alert("��ܰ��ʾ:\n��ȷ�϶�������.");
		document.form1.password22.focus();
		return false;
	}
	if(password22.length <= 5){
		alert("��ܰ��ʾ:\n����С��6λ.");
		document.form1.password22.focus();
		return false;
	}
	if(password22 != password2){
		alert("��ܰ��ʾ:\n�����������벻һ��.");
		document.form1.password22.focus();
		return false;
	}
//	if(password3.length == 0){
//		alert("��ܰ��ʾ:\n��������������.");
//		document.form1.password3.focus();
//		return false;
//	}
//	if(password3.length <= 5){
//		alert("��ܰ��ʾ:\n����С��6λ.");
//		document.form1.password3.focus();
//		return false;
//	}
////	if(password32.length == 0){
//		alert("��ܰ��ʾ:\n��ȷ����������.");
//		document.form1.password32.focus();
//		return false;
//	}
//	if(password32.length <= 5){
//		alert("��ܰ��ʾ:\n����С��6λ.");
//		document.form1.password32.focus();
//		return false;
//	}
//	if(password32 != password3){
//		alert("��ܰ��ʾ:\n�����������벻һ��.");
//		document.form1.password32.focus();
//		return false;
//	}

	if(UserCard.length == 0){
		alert("��ܰ��ʾ:\n���������֤����.");
		document.form1.UserCard.focus();
		return false;
	}
	if(UserName.length == 0){
		alert("��ܰ��ʾ:\n�������Ա����.");
		document.form1.UserName.focus();
		return false;
	}
	if(UserTel.length == 0){
		alert("��ܰ��ʾ:\n��������ϵ�绰.");
		document.form1.UserTel.focus();
		return false;
	}
	if(UserAddress.length == 0){
		alert("��ܰ��ʾ:\n��������ϵ��ַ.");
		document.form1.UserAddress.focus();
		return false;
	}
	if(BankCard.length == 0){
		alert("��ܰ��ʾ:\n�����뿪���ʺ�.");
		document.form1.BankCard.focus();
		return false;
	}
	if(BankUserName.length == 0){
		alert("��ܰ��ʾ:\n�����뿪������.");
		document.form1.BankUserName.focus();
		return false;
	}
	if(BankAddress.length == 0){
		alert("��ܰ��ʾ:\n�����뿪����ַ.");
		document.form1.BankAddress.focus();
		return false;
	}
	if(useremail.length == 0){
		alert("��ܰ��ʾ:\n�������������.");
		document.form1.useremail.focus();
		return false;
	}
//	if(classification.value == 0){
//		alert("��ܰ��ʾ:\n��ѡ������ʡ��.");
//		return false;
//	}
//	if(menu.value == 0){
//		alert("��ܰ��ʾ:\n��ѡ�����ڳ���.");
//		return false;
//	}
	return true;
}
-->
</script>
<style>
	#test select{
		width:100px;
	}
	#span{color:red;}
  </style>
</head>
<?php
$_system=new system_class();
$sys=$_system->system_information(1);
?>
<body onLoad="GetNickName();">
<body >
<form id="form1" name="form1" method="post" action="register2.php" onSubmit="return CheckForm();">
<table  width="100%" height="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
	<tr>
    <td colspan="2" align="center" style="color:red;">*Ϊ������Ŀ<iframe name="iframe" id="iframe" width="0" height="0" src="about:blank" style="display:none"></iframe></td>
    </tr>
	<tr style="display: none">
	  <td width="42%" align="right">�������ı�ţ�</td>
	  <td width="58%" align="left"><input name="bdName" type="text" id="bdName" value="" maxlength="15" />
&nbsp;<span id="span">(*)</span>&nbsp;<label id="bdNamelabel"/>
  <input name="button" type="button" class="button_blue" id="button" onclick='checknickname(1);' value="��  ֤">
</td>
    </tr>
    <?php
    	$rn=$_GET['rn'];
		if($rn==""){$rn=$_SESSION['nickname'];}
	?>
	<tr>
    <td align="right">�Ƽ��˱�ţ�</td>
    <td align="left">
      <input name="rName" type="text" id="rName" value="<?php echo $rn?>" maxlength="15"/>
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="rnamelable"/>
        <input name="button2" type="button" class="button_blue" id="button2" onclick='checknickname(2);' value="��  ֤">
      </td>
  </tr>
  <tr >
    <td align="right">�ӵ��˱�ţ�</td>
    <td align="left">
      <input name="FatherName" type="text" id="FatherName"  value="<?=$_GET['nickname']?>" maxlength="15"/>
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="FatherNamelabel"/>
        <input name="button3" type="button" class="button_blue" id="button3" onclick='checknickname(3);' value="��  ֤">
      </td>
  </tr>
  <tr >
    <td align="right">��������</td>
    <td align="left">
      <select name="TreePlace" id="TreePlace">
        <option value="1" <?php if($_GET['tid']==1){?>selected<?php }?>>����</option>
        <option value="2" <?php if($_GET['tid']==2){?>selected<?php }?>>����</option>
        <!-- <option value="3" <?php if($_GET['tid']==3){?>selected<?php }?>>����</option> -->
      </select></td>
  </tr>
   <tr style="display: none">
    <td align="right">�����ʸ�</td>
    <td align="left">
      <select name="uLevel" id="uLevel">
      <?php
		$_ulevel=new ulevel_class();
      	for($i=1;$i<=1;$i++){
			$ul=$_ulevel->getulevelbyulevel($i);
	  ?>
        <option value="<?=$i?>"><?=$ul['lvname']?>[��<?=$ul['lsk']?>]</option>
        <?php
		}
		?>
      </select></td>
  </tr>
  <tr>
    <td colspan="2" align="center">����</td>
    </tr>
  <tr>
    <td align="right">һ�����룺</td>
    <td align="left"><input name="password1" type="password" id="password1" onBlur="Check('password1');" value="<?=$sys['password1']?>" maxlength="20"/>
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="password1label"/></td>
  </tr>
  <tr>
    <td align="right">ȷ��һ�����룺</td>
    <td align="left"><input name="password12" type="password" id="password12" onBlur="Check('password12');" value="<?=$sys['password1']?>" maxlength="20"/>
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="password12label"/></td>
  </tr>
  <tr>
    <td align="right">�������룺</td>
    <td align="left"><input name="password2" type="password" id="password2" onBlur="Check('password2');" value="<?=$sys['password2']?>" maxlength="20"/>
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="password2label"/></td>
  </tr>
  <tr>
    <td align="right">ȷ�϶������룺</td>
    <td align="left"><input name="password22" type="password" id="password22" onBlur="Check('password22');" value="<?=$sys['password2']?>" maxlength="20"/>
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="password22label"/></td>
  </tr>
  <tr style="display:none">
    <td align="right">�������룺</td>
    <td align="left"><input name="password3" type="password" id="password3" onBlur="Check('password3');" value="333333" maxlength="20"/>
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="password3label"/></td>
  </tr>
  <tr style="display:none">
    <td align="right">ȷ���������룺</td>
    <td align="left"><input name="password32" type="password" id="password32" onBlur="Check('password32');" value="333333" maxlength="20"/>
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="password32label"/></td>
  </tr>
  <tr style="display: none">
    <td align="right">���밲ȫ���⣺</td>
    <td align="left"><input name="passQuestion" type="text" id="passQuestion" onBlur="Check('passQuestion');" value="" maxlength="50"/>
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="passQuestionlabel"/></td>
  </tr>
  <tr style="display: none">
    <td align="right">���밲ȫ�𰸣�</td>
    <td align="left"><input name="passAnswer" type="text" id="passAnswer" onBlur="Check('passAnswer');" value="" maxlength="50"/>
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="passAnswerlabel"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center">��Ա����</td>
    </tr>
  <tr>
    <td align="right">��Ա��ţ�</td>
    <td align="left">
      <input name="UserID" type="text" id="UserID" maxlength="15"/>
      &nbsp;<span id="span">(*)</span>&nbsp;
      <label id="FatherNamelabel"/>      
      <input name="button4" type="button" class="button_blue" id="button4" onclick='checknickname(4);' value="��  ֤"></td>
  </tr>
  <tr style="display:none">
    <td align="right">��Ա��ţ�</td>
    <td align="left"><input name="NickName" type="text" id="NickName" onBlur="Check('NickName');" value="��������" maxlength="20" />
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="NickNamelabel"/></td>
  </tr>
  <tr>
    <td align="right">��Ա������</td>
    <td align="left"><input name="UserName" type="text" id="UserName" onBlur="Check('UserName');" value="123" maxlength="10"/>
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="UserNamelabel"/></td>
  </tr>
  <tr style="display: none">
    <td align="right">���֤���룺</td>
    <td align="left"><input name="UserCard" type="text" id="UserCard"  onblur="Check('UserCard');" value="123" maxlength="20" onKeyUp="showBirthday(this)" />
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="UserCardlabel"/></td>
  </tr>
  <tr style="display: none">
    <td align="right">�Ա�</td>
    <td align="left">��
      <input name="sex" type="radio" id="sex" value="1" checked>
      Ů
      <label for="radio">
        <input type="radio" name="sex" id="sex" value="0">
      </label></td>
  </tr>
  <tr style="display: none">
    <td align="right">�������ڣ�</td>
    <td align="left"><label for="select"></label>
      <select name="nian" id="nian">
      <?php for($i=1930;$i<=2030;$i++){?>
        <option value="<?=$i?>"><?=$i?></option>
        <?php }?>
      </select>
      ��
      <select name="yue" id="yue">
      <?php for($i=1;$i<=12;$i++){?>
        <option value="<?=$i?>"><?=$i?></option>
        <?php }?>
      </select>
      ��
      <select name="ri" id="ri">
      <?php for($i=1;$i<=31;$i++){?>
        <option value="<?=$i?>"><?=$i?></option>
        <?php }?>
      </select>
      ��</td>
  </tr>
  <tr style="display: none">
    <td align="right">ѧ����</td>
    <td align="left">
      <select name="xueli" id="xueli">
        <option value="Сѧ">Сѧ</option>
        <option value="����">����</option>
        <option value="����">����</option>
        <option value="��ר">��ר</option>
        <option value="��ѧ">��ѧ</option>
        <option value="����">����</option>
      </select>
      </td>
  </tr>
  <tr style="display: none">
    <td colspan="2" align="center">ͨѶ��ַ</td>
    </tr>
    <tr style="display: none">
    <td align="right">��ϵ��ַ��</td>
    <td align="left"><div id="test"></div></td>
  </tr>
  <tr style="display: none">
    <td align="right">�ջ���ϸ��ַ��</td>
    <td align="left"><input name="UserAddress" type="text" id="UserAddress" onBlur="Check('UserAddress');" value="123" maxlength="50"/>
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="UserAddresslabel"/></td>
  </tr>
  <tr >
    <td align="right">��ϵ�绰��</td>
    <td align="left"><input name="UserTel" type="text" id="UserTel" onBlur="Check('UserTel');" value="123" maxlength="20"/>
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="UserTellabel"/></td>
  </tr>
  <tr style="display: none">
    <td align="right">�������䣺</td>
    <td align="left"><input name="useremail" type="text" id="useremail" onBlur="Check('useremail');" value="123" maxlength="50"/>
       &nbsp;<span id="span">(*)</span>&nbsp;
       <label id="useremaillabel"/></td>
  </tr>
  <tr>
    <td align="right">QQ���룺</td>
    <td align="left"><input name="UserQQ" type="text" id="UserQQ"  value="123" maxlength="12"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center">�����˻�����</td>
    </tr>
    <tr>
    <td align="right">�����ʺţ�</td>
    <td align="left">
      <select name="bankname" id="bankname">
        <option value="�й�ũҵ����">�й�ũҵ����</option>
        <option value="�й���������">�й���������</option>
        <option value="�й���������">�й���������</option>
        <option value="�й���������">�й���������</option>
        <option value="�й�����">�й�����</option>
      </select></td>
  </tr>
  <tr>
    <td align="right">�����ʺţ�</td>
    <td align="left"><input name="BankCard" type="text" id="BankCard" onBlur="Check('BankCard');" value="123" maxlength="20"/>
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="BankCardlabel"/></td>
  </tr>
  <tr>
    <td align="right">����������</td>
    <td align="left"><input name="BankUserName" type="text" id="BankUserName" onBlur="Check('BankUserName');" value="123" maxlength="20"/>
      &nbsp;<span id="span">(*)</span>&nbsp;<label id="BankUserNamelabel"/></td>
  </tr>
  <tr>
    <td align="right">������ַ��</td>
    <td align="left"><input name="BankAddress" type="text" id="BankAddress" onBlur="Check('BankAddress');" value="123" maxlength="50"/>
      &nbsp;<span  id="span">(*)</span>&nbsp;<label id="BankAddresslabel"/></td>
  </tr>
  <tr >
    <td align="right">֧�����˺ţ�</td>
    <td align="left"><input name="zhifubao" type="text" id="zhifubao" value="123" maxlength="50"/></td>
  </tr>
  <tr >
    <td align="right">΢�źţ�</td>
    <td align="left"><input name="caifutong" type="text" id="caifutong"  value="123" maxlength="50"/></td>
  </tr>
 
  <tr>
    <td colspan="2" align="center">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="2" align="center">
    <input name="submit" type="submit" class="button_green" value="ע  ��" id="submit" onClick="javascript:return confirm('��ȷ��ע������ȷ����Ϣ��д������ȷ.');">
    </td>
  </tr>
</table>
</form>

</body>
</html>