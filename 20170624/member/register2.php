<?php
include_once("../function.php");
include_once("../class/ulevel_class.php");
include_once("../class/member_class.php");
include_once("../class/system_class.php");
include_once("../class/email_class.php");
session_start();
header("Content-Type: text/html;charset=utf-8");
if($_POST['submit']){
	$bdName=$_POST['bdName'];
	$rName=$_POST['rName'];
	$FatherName=$_POST['FatherName'];
	$TreePlace=$_POST['TreePlace'];
//	$UserID=$_POST['UserID'];
	$UserID=$_POST['NickName'];
 	$NickName=$_POST['NickName'];
	$password1=$_POST['password1'];
	$password2=$_POST['password2'];
	$password3=$_POST['password3'];
	$passQuestion=$_POST['passQuestion'];
	$passAnswer=$_POST['passAnswer'];
	$UserCard=$_POST['UserCard'];
	$UserName=$_POST['UserName'];
	$UserTel=$_POST['UserTel'];
	$UserAddress=$_POST['UserAddress'];
	$UserQQ=$_POST['UserQQ'];
	$BankName=$_POST['bankname'];
	$BankCard=$_POST['BankCard'];
	$BankUserName=$_POST['BankUserName'];
	$BankAddress=$_POST['BankAddress'];
	$useremail=$_POST['useremail'];
	$sex=$_POST['sex'];
	$nian=$_POST['nian'];
	$yue=$_POST['yue'];
	$ri=$_POST['ri'];
	$xueli=$_POST['xueli'];
	$zhifubao=$_POST['zhifubao'];
	$caifutong=$_POST['caifutong'];
	$userprovinceid=$_POST['classification'];
	$usercityid=$_POST['menu'];
	$uLevel=$_POST['uLevel'];
	$_ulevel=new ulevel_class();
	$ul=$_ulevel->getulevelbyulevel($uLevel);
	$jibie=$ul['lvname'];
	$lsk=$ul['lsk'];
	$dan=0;
	$pv=0;
	$sheng=$_POST['province'];
	$shi=$_POST['city1'];
	$xian=$_POST['city2'];
	
	$zhuce=true;
	if(checklingji($FatherName) == true)
	{
		$zhuce=false;
		echo "<script language=javascript>alert('您不能在零级会员下面注册会员,请刷新后再试.');window.location.href='zhuce_biaodan.php?nickname=".$FatherName."&tid=".$TreePlace."'</script>";
	}
	if(checkrName($rName) == true)
	{
		$zhuce=false;
		echo "<script language=javascript>alert('会员推荐人编号不存在,请刷新后再试.');window.location.href='zhuce_biaodan.php?nickname=".$FatherName."&tid=".$TreePlace."'</script>";
	}
	if(checkFatherName($FatherName) == true)
	{
		$zhuce=false;
		echo "<script language=javascript>alert('会员接点人编号不存在,请刷新后再试.');window.location.href='zhuce_biaodan.php?nickname=".$FatherName."&tid=".$TreePlace."'</script>";
	}
// 	if(checkUserTel($UserTel) == true)
// 	{
// 		$zhuce=false;
// 		echo "<script language=javascript>alert('每个手机号只能注册一个账户,请刷新后再试.');window.location.href='zhuce_biaodan.php?nickname=".$FatherName."&tid=".$TreePlace."'</script>";
// 	}
// 	if(checkcaifutong($caifutong) == true)
// 	{
// 		$zhuce=false;
// 		echo "<script language=javascript>alert('每个微信号只能注册一个账户,请刷新后再试.');window.location.href='zhuce_biaodan.php?nickname=".$FatherName."&tid=".$TreePlace."'</script>";
// 	}
	if(checkUserID($UserID) == true)
	{
		$zhuce=false;
		echo "<script language=javascript>alert('会员编号已存在,请刷新后再试.');window.location.href='zhuce_biaodan.php?nickname=".$FatherName."&tid=".$TreePlace."'</script>";
	}
	if(checkNickName($NickName) == true)
	{
		$zhuce=false;
		echo "<script language=javascript>alert('会员编号已存在,请更换后再试.');window.location.href='zhuce_biaodan.php?nickname=".$FatherName."&tid=".$TreePlace."'</script>";
	}
//	if(checkNickName($bdName) == false){
//		$zhuce=false;
//		echo "<script language=javascript>alert('服务中心编号不存在,请检查后再试.');window.location.href='zhuce_biaodan.php?nickname=".$FatherName."&tid=".$TreePlace."'</script>";
//	}else{
//		$array=getMemberbyNickName($bdName);
//		$bdid=$array['id'];		
//	}
// 	if(checkNickNamebyispay($rName) == false){
// 		$zhuce=false;
// 		echo "<script language=javascript>alert('推荐人编号不存在,或级别不够,请检查后再试.');window.location.href='zhuce_biaodan.php?nickname=".$FatherName."&tid=".$TreePlace."'</script>";
// 	}else{
		$array=getMemberbyNickName($rName);
		$reid=$array['id'];
		$reLevel=$array[relevel]+1;
		$rePath="".$array[repath].$array[id].",";
// 	}
// 	if(checkNickNamebyispay($FatherName) == false){
// 		$zhuce=false;
// 		echo "<script language=javascript>alert('接点人编号不存在,或尚未激活,请检查后再试.');window.location.href='zhuce_biaodan.php?nickname=".$FatherName."&tid=".$TreePlace."'</script>";
// 	}else{
		$array=getMemberbyNickName($FatherName);
		$FatherID=$array['id'];
		$pLevel=$array[plevel]+1;
		$fplevel=$array[plevel];
		$pPath="".$array[ppath].$array[id].",";
		$area1=$array['area1'];
		$area2=$array['area2'];
		$frecount=$array['recount'];
		$fxlevel=$array['xlevel'];
// 	}
	
	if(checkFatherMan($FatherID,$TreePlace) == true){
		$zhuce=false;
		echo "<script language=javascript>alert('该位置已有会员注册,请更换区域再试.');window.location.href='zhuce_biaodan.php?nickname=".$FatherName."&tid=".$TreePlace."'</script>";
	}
	
// 	if($area1==0 and $TreePlace==2){
// 		$zhuce=false;
// 		echo "<script language=javascript>alert('必须先激活左区,才能在右区注册.');window.location.href='register.php?nickname=".$FatherName."&tid=".$TreePlace."'</script>";
// 	}
	
	
	if($zhuce){
		$member['userid']=$UserID;
		$member['nickname']=$NickName;
		$member['password1']=md5($password1);
		$member['password2']=md5($password2);
		$member['password3']=md5($password3);
		$member['passquestion']=$passQuestion;
		$member['passanswer']=$passAnswer;
		$member['username']=$UserName;
		$member['usercard']=$UserCard;
		$member['usertel']=$UserTel;
		$member['useraddress']=$UserAddress;
		$member['userqq']=$UserQQ;
		$member['bankname']=$BankName;
		$member['bankcard']=$BankCard;
		$member['bankuserName']=$BankUserName;
		$member['sheng']=$sheng;
		$member['shi']=$shi;
		$member['xian']=$xian;
		$member['bankaddress']=$BankAddress;
		$member['ulevel']=$uLevel;
		$member['dan']=$dan;
		$member['lsk']=$lsk;
		$member['pv']=$pv;
		$member['reid']=$reid;
		$member['rname']=$rName;
		$member['relevel']=$reLevel;
		$member['repath']=$rePath;
		$member['treeplace']=$TreePlace;
		$member['fatherid']=$FatherID;
		$member['fathername']=$FatherName;
		$member['plevel']=$pLevel;
		$member['ppath']=$pPath;
//		$member['bdid']=$bdid;
		$member['bdname']=$bdName;
		$member['useremail']=$useremail;
		$member['rdt']=now();
		$member['sex']=$sex;
		$member['nian']=$nian;
		$member['yue']=$yue;
		$member['ri']=$ri;
		$member['xueli']=$xueli;
		$member['zhifubao']=$zhifubao;
		$member['caifutong']=$caifutong;
		$member['dan']=$dan;
//		$member['zsq']=$lsk;
//		$us=getMemberbyID($member['reid']);
//		
//		if ($us['zsq']>=200){
//			edit_sql("update `member` set zsq=zsq-".$lsk." where id=".$us['id']."");
//		}else {
//			echo "<script language=javascript>alert('积分余额不足，不能注册会员.');window.location.href='register.php?nickname=".$FatherName."&tid=".$TreePlace."'</script>";
//			break;
//		}
		//$member['zcid']=$_SESSION['ID'];
		add_insert_cl('member',$member);
		$member_cl=new member_class();
		$rs=getMemberbyNickName($NickName);
		$member_cl->addArea($rs['id'],1,1);	//累计伞下人数
		edit_sql("update `member` set recount=recount+1 where id=".$reid."");
		$_email=new email_class();
		$email=$_email->getemail();
		if ($email['zchy']==1){
			$_email->sendemail($member['useremail'],$member['nickname'],$email['hytitle'],$email['hycontent']);
		}
	}

	
}
$member = getMemberbyID($_SESSION['ID']);
//var_dump($_SESSION['ID']);
$ul = ulevel($member['ulevel']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'header.php';?>
</head>
<body>
<?php include 'navbar.php';?>
<div id="content">
  <div class="container">
    <div class="row">
     <?php include 'leftsider.php';?>
      <div class="span9" >
	  
	
                                    
 
<div class="table-overflow">            
                      <table  width="100%" height="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
	<tr>
    <td colspan="2" align="center">注册成功</td>
    </tr>
	<tr style="display:none">
	  <td width="50%" height="30" align="right">服务中心编号：</td>
	  <td width="50%" align="left"><?=$bdName?></td>
    </tr>
	<tr>
    <td width="50%" align="right">推荐人编号：</td>
    <td  width="50%" align="left">
      <?=$rName?></td>
  </tr>
  <tr style="display:none">
    <td align="right">接点人编号：</td>
    <td align="left">
      <?=$FatherName?></td>
  </tr>
  <tr style="display:none">
    <td align="right">安置区域：</td>
    <td align="left">
      <?=$TreePlace?></td>
  </tr>
  <tr>
    <td width="50%"  align="right">会员编号：</td>
    <td width="50%"  align="left">
      <?=$UserID?></td>
  </tr>
  <tr style="display:none">
    <td align="right">会员编号：</td>
    <td align="left"><?=$NickName?></td>
  </tr>
  <tr>
    <td width="50%"  align="right">一级密码：</td>
    <td width="50%"  align="left"><?=$password1?></td>
  </tr>
  <tr>
    <td width="50%"  align="right">二级密码：</td>
    <td width="50%"  align="left"><?=$password2?></td>
  </tr>
  <tr style="display:none">
    <td align="right">三级密码：</td>
    <td align="left"><?=$password3?></td>
  </tr>
  <tr style="display:none">
    <td align="right">密码安全问题：</td>
    <td align="left"><?=$passQuestion?></td>
  </tr>
  <tr style="display:none">
    <td align="right">密码安全答案：</td>
    <td align="left"><?=$passAnswer?></td>
  </tr>
  <tr style="display:none">
    <td align="right">身份证号码：</td>
    <td align="left"><?=$UserCard?></td>
  </tr>
  <tr>
    <td width="50%"  align="right">会员姓名：</td>
    <td width="50%"  align="left"><?=$UserName?></td>
  </tr>
  <tr style="display: none">
    <td width="50%"  align="right">性别：</td>
    <td width="50%"  align="left">
	<?php if ($sex==1){?>男<?php }else{?>女<?php }?></td>
  </tr>
  <tr style="display:none">
    <td align="right">出生日期：</td>
    <td align="left"><?=$nian?>年<?=$yue?>月<?=$ri?>日</td>
  </tr>
  <tr style="display:none">
    <td align="right">学历：</td>
    <td align="left"><?=$xueli?></td>
  </tr>
  <tr style="display:none">
    <td align="right">联系电话：</td>
    <td align="left"><?=$UserTel?></td>
  </tr>
  <tr style="display:none">
    <td align="right">联系地址：</td>
    <td align="left"><?=$sheng?><?=$shi?><?=$xian?></td>
  </tr>
  <tr style="display:none">
    <td align="right">收货详细地址：</td>
    <td align="left"><?=$UserAddress?></td>
  </tr>
  <tr style="display:none">
    <td align="right">QQ号码：</td>
    <td align="left"><?=$UserQQ?></td>
  </tr>
  <tr>
    <td width="50%"  align="right">开户银行：</td>
    <td width="50%"  align="left">
      <?=$BankName?></td>
  </tr>
  <tr>
    <td width="50%"  align="right">开户帐号：</td>
    <td width="50%"  align="left"><?=$BankCard?></td>
  </tr>
  <tr>
    <td width="50%"  align="right">开户姓名：</td>
    <td width="50%"  align="left"><?=$BankUserName?></td>
  </tr>
  <tr>
    <td width="50%"  align="right">开户地址：</td>
    <td width="50%"  align="left"><?=$BankAddress?></td>
  </tr>
  <tr style="display:none">
    <td align="right">支付宝账号：</td>
    <td align="left"><?=$zhifubao?></td>
  </tr>
  <tr style="display:none">
    <td align="right">财付通帐号：</td>
    <td align="left"><?=$caifutong?></td>
  </tr>
  <tr>
    <td width="50%"  align="right">加盟级别：</td>
    <td width="50%"  align="left">
      <?=$jibie?></td>
  </tr>
  <tr>
    <td width="50%"  align="right">汇款金额：</td>
    <td width="50%" ><?=$lsk?></td>
  </tr>
  <tr>
    <td colspan="2" align="center">请尽快联系您的推荐人。</td>
  </tr>
  
  <tr>
    <td  colspan="2" align="center"><a href="zhuce_biaodan.php">继续注册</a>
    &nbsp;  &nbsp;  &nbsp;  &nbsp;
    <?php if (!$_SESSION['ID']){?>
     <a href="../index.php">返回登录</a>
     <?php }?>
     </td>
  </tr>
  
</table>
                        
                    

      </div>
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
