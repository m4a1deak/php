<?php
include_once("../function.php");
include_once("../class/member_class.php");
include_once("action.php");
header("Content-Type: text/html;charset=utf-8");
session_start();
	$us=getMemberbyID($_GET['ID']);
	$uid=$us['id'];
	$userid=$us['userid'];
	$nickname=$us['nickname'];
	$rname=$us['rname'];
	$fathername=$us['fathername'];
	$bdname=$us['bdname'];
	$password1=$us['password1'];
	$password2=$us['password2'];
	$passQuestion=$us['passquestion'];
	$passAnswer=$us['passanswer'];
	$UserCard=$us['usercard'];
	$UserName=$us['username'];
	$UserTel=$us['usertel'];
	$UserAddress=$us['useraddress'];
	$UserQQ=$us['userqq'];
	$BankName=$us['bankname'];
	$BankCard=$us['bankcard'];
	$BankUserName=$us['bankusername'];
	$BankAddress=$us['bankaddress'];
	$useremail=$us['useremail'];
	$rdt=$us['rdt'];
	$pdt=$us['pdt'];
	$ulevel=$us['ulevel'];
	$area1=$us['area1'];
	$area2=$us['area2'];
	$area3=$us['area3'];
	$area4=$us['area4'];
	$area5=$us['area5'];
	$yarea1=$us['yarea1'];
	$yarea2=$us['yarea2'];
	$yarea3=$us['yarea3'];
	$maxmey=$us['maxmey'];
	$mey=$us['mey'];
	$zsq=$us['zsq'];
	$gwb=$us['gwb'];
	$jijin=$us['jijin'];
	$htjine=$us['htjine'];
	$cfxf=$us['cfxf'];
	$wlf=$us['wlf'];
	$sheng=$us['sheng'];
	$shi=$us['shi'];
	$xian=$us['xian'];
	$zhifubao=$us['zhifubao'];
	$caifutong=$us['caifutong'];
	$rus=getMemberbyID($us['reid']);
	$fus=getMemberbyID($us['fatherid']);
	$rusername=$rus['username'];
	$fatherusername=$fus['username'];
	$islock=$us['islock'];
	$kai=$us['kai'];
	$isfh=$us['isfh'];
	$ispay=$us['ispay'];
	
if ($_POST['submit']){
	
   if($us['password1'] != $_POST['password1']){
        action::record("修改一级密码",$us['id'],$_SESSION['adminid'], $_POST['password1']);
		$us_update['password1']=md5($_POST['password1']);
		$us_update['pass1']=$_POST['password1'];

	}
	if($us['password2'] != $_POST['password2']){
	   action::record("修改二级密码", $us['id'],$_SESSION['adminid'], $_POST['password2']);
		$us_update['password2']=md5($_POST['password2']);
		$us_update['pass2']=$_POST['password2'];
	}
	if($us['passquestion'] != $_POST['passQuestion']){
		action::record("修改密保问题", $us['id'], $_SESSION['adminid'], $_POST['passQuestion']);
		$us_update['passquestion']=$_POST['passQuestion'];
		
	}
	if($us['passanswer'] != $_POST['passAnswer']){
		action::record("修改密保问题", $us['id'], $_SESSION['adminid'], $_POST['passAnswer']);
		$us_update['passanswer']=$_POST['passAnswer'];
	
	}
	if($us['usercard']!=$_POST['UserCard']){
	    action::record("修改身份证", $us['id'], $_SESSION['adminid'], $_POST['UserCard']);
	    $us_update['usercard']=$_POST['UserCard'];
	}
	if($us['username']!=$_POST['UserName']){
	    action::record("修改姓名", $us['id'], $_SESSION['adminid'], $_POST['UserName']);
	    $us_update['username']=$_POST['UserName'];
	}
	
	$us_update['usertel']=$_POST['UserTel'];
	if($us['useraddress']!=$_POST['UserAddress']){
	    action::record("修改收货地址", $us['id'], $_SESSION['adminid'], $_POST['UserAddress']);
	    $us_update['useraddress']=$_POST['UserAddress'];
	}
	
	$us_update['userqq']=$_POST['UserQQ'];
	if($us['bankname']!=$_POST['BankName']){
	    action::record("修改开户银行", $us['id'], $_SESSION['adminid'], $_POST['BankName']);
	    $us_update['bankname']=$_POST['BankName'];
	}
	
	if($us['bankcard']!=$_POST['BankCard']){
	    action::record("修改开户账号", $us['id'], $_SESSION['adminid'], $_POST['BankCard']);
	    $us_update['bankcard']=$_POST['BankCard'];
	}
	
	if($us['bankusername']!=$_POST['BankUserName']){
	    action::record("修改开户姓名", $us['id'], $_SESSION['adminid'], $_POST['BankUserName']);
	    $us_update['bankusername']=$_POST['BankUserName'];
	}
	
	if($us['bankaddress']!=$_POST['BankAddress']){
	    action::record("修改开户地址", $us['id'], $_SESSION['adminid'], $_POST['BankAddress']);
	    $us_update['bankaddress']=$_POST['BankAddress'];
	}
	
	if($us['ulevel']!=$_POST['ulevel']){
	    action::record("修改会员等级", $us['id'], $_SESSION['adminid'], $_POST['ulevel']);
	   
	    $ss=getOne("select id,dan,lsk from ulevel where id=".$_POST['ulevel']."");
	    $us_update['ulevel']=$_POST['ulevel'];
	   // $us_update['dan']=$ss['dan'];//单数
	  //  $us_update['lsk']=$ss['lsk'];//注册金额
	   
	}
	if($us['area1']!=$_POST['area1']){
	    action::record("修改左区总业绩", $us['id'], $_SESSION['adminid'], $_POST['area1']);
	    $us_update['area1']=$_POST['area1'];
	}
	if($us['area2']!=$_POST['area2']){
	    action::record("修改右区总业绩", $us['id'], $_SESSION['adminid'], $_POST['area2']);
	    $us_update['area2']=$_POST['area2'];
	}
	if($us['yarea1']!=$_POST['yarea1']){
	    action::record("修改左区剩余业绩", $us['id'], $_SESSION['adminid'], $_POST['yarea1']);
	    $us_update['yarea1']=$_POST['yarea1'];
	}
	if($us['yarea2']!=$_POST['yarea2']){
	    action::record("修改右区剩余业绩", $us['id'], $_SESSION['adminid'], $_POST['yarea2']);
	    $us_update['yarea2']=$_POST['yarea2'];
	}
	if($us['area4']!=$_POST['area4']){
		action::record("修改福利奖左区业绩", $us['id'], $_SESSION['adminid'], $_POST['area4']);
		$us_update['area4']=$_POST['area4'];
	}
	if($us['area5']!=$_POST['area5']){
		action::record("修改福利奖右区业绩", $us['id'], $_SESSION['adminid'], $_POST['area5']);
		$us_update['area5']=$_POST['area5'];
	}
	
// 	$us_update['area3']=$_POST['area3'];
	
	$us_update['islock']=$_POST['islock'];
	
// 	$us_update['yarea3']=$_POST['yarea3'];
// 	if($us['sheng']!=$_POST['province']){
// 		action::record("修改省份", $us['id'], $_SESSION['adminid'], $_POST['province']);
// 		$us_update['sheng']=$_POST['province'];
// 	}
	
// 	if($us['shi']!=$_POST['city']){
// 		action::record("修改城市", $us['id'], $_SESSION['adminid'], $_POST['city']);
// 		$us_update['shi']=$_POST['city'];
// 	}
	
// 	if($us['xian']!=$_POST['county']){
// 		action::record("修改所在县区", $us['id'], $_SESSION['adminid'],$_POST['county']);
// 		$us_update['xian']=$_POST['county'];
// 	}
	
	$us_update['useremail']=$_POST['useremail'];
	$us_update['isfh']=$_POST['isfh'];
	if($_POST['maxmey']!=0){
	    action::record("累计奖金", $us['id'], $_SESSION['adminid'],$_POST['maxmey']);
	     
		$us_update['maxmey']=$us['maxmey']+$_POST['maxmey'];
	}
	if($_POST['mey']!=0){
	    action::record("剩余奖金", $us['id'], $_SESSION['adminid'],$_POST['mey']);
		$us_update['mey']=$us['mey']+$_POST['mey'];
	}
	if($_POST['zsq']!=0){
	    action::record("报单币", $us['id'], $_SESSION['adminid'],$_POST['zsq']);
		$us_update['zsq']=$us['zsq']+$_POST['zsq'];
	}
// 	if($_POST['gwb']!=0){
// 		action::record("积分", $us['id'], $_SESSION['adminid'],$_POST['gwb']);
// 		$us_update['gwb']=$us['gwb']+$_POST['gwb'];
// 	}
	if($_POST['cfxf']!=0){
	    action::record("复投币", $us['id'], $_SESSION['adminid'],$_POST['cfxf']);
		$us_update['cfxf']=$us['cfxf']+$_POST['cfxf'];
	}
// 	if($_POST['jijin']!=0){
// 		action::record("豪车基金", $us['id'], $_SESSION['adminid'],$_POST['jijin']);
// 		$us_update['jijin']=$us['jijin']+$_POST['jijin'];
// 	}
	if($_POST['wlf']!=0){
		action::record("爱心基金", $us['id'], $_SESSION['adminid'],$_POST['wlf']);
		$us_update['wlf']=$us['wlf']+$_POST['wlf'];
	}
	
// 	if($us['zhifubao']!=$_POST['zhifubao']){
// 		action::record("支付宝",$us['nickname'], $_SESSION['to_admin'], $_POST['zhifubao']);
// 		$us1_update['zhifubao']=$_POST['zhifubao'];
// 	}
// 	if($us['caifutong']!=$_POST['caifutong']){
// 		action::record("微信",$us['caifutong'], $_SESSION['to_admin'], $_POST['caifutong']);
// 		$us1_update['caifutong']=$_POST['caifutong'];
// 	}
// 	if($_POST['htjine']!=0){
// 		action::record("回填金额", $us['id'], $_SESSION['adminid'],$_POST['htjine']);
// 		$us_update['htjine']=$us['htjine']+$_POST['htjine'];
// 	}
// 	if($_POST['isfh']!=$us['isfh']){
// 		action::record("见点奖", $us['id'], $_SESSION['adminid'], (int)$_POST['isfh']);
// 		$us_update['isfh']=$_POST['isfh'];
// 	}
// 	if($_POST['kai']!=$us['kai']){
// 		action::record("开C区", $us['id'], $_SESSION['adminid'], (int)$_POST['kai']);
// 		$us_update['kai']=$_POST['kai'];
// 	}
	$upreman=$_POST['upreman'];
	if($upreman!=""){
		if($upreman!=$nickname){
			$member_cl=new member_class();
			if($member_cl->checkNickNameispay($upreman)){
				if($member_cl->checkisrepath($us['id'],$upreman)){
					echo "<script language=javascript>alert('会员".$upreman."已在您的团队中,无法将其作为推荐人.');window.location.href='?ID=".$us['id']."'</script>";
				}else{
				    $us_update['rname']=$upreman;
				    if($us['rname']!=$upreman){
				        action::record("修改推荐人", $us['id'], $_SESSION['adminid'], $upreman);
				        
				    }
					
					edit_update_cl('member',$us_update,$us['id']);	
					$member_cl->update_reman($upreman);	
				}
			}else{
				echo "<script language=javascript>alert('推荐人不存在或没有激活.');window.location.href='?ID=".$us['id']."'</script>";	
			}
		}else{
			echo "<script language=javascript>alert('推荐人不能填写自己.');window.location.href='?ID=".$us['id']."'</script>";		
		}
	}else{
		echo edit_update_cl('member',$us_update,$us['id']);	
	}
	echo "<script language=javascript>alert('资料修改成功.');window.location.href='?ID=".$us['id']."'</script>";	
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/table.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>个人资料</title>
<style>
	#test select{
		width:100px;
	}
  </style>
<script src='../js/ssjl_jquery.js'></script>
  <script src="../js/shengshixian/provincesdata.js" type="text/javascript"></script>
  <script>
	//调用插件
	
		$(function(){
			$("#test").ProvinceCity();

			$("#province").change(function(){
				
				$.ajax({
					type:"get",
					url:"../member/diqu.php?province="+this.value,
					dataType:"text",
					success:function(a){
						$("#city").html(a);
						$("#county").html(a);
					}
					
				})
			})

			$("#city").change(function(){
				$.ajax({
					type:"get",
					url:"../member/diqu.php?city="+this.value,
					dataType:"text",
					success:function(a){
						$("#county").html(a);
					}
					
				})
			})		
		});
		
		
	
  </script>
<script language="javascript">
<!--
$.fn.ProvinceCity = function(){
	var _self = this;
	//定义3个默认值
	_self.data("province",["<?=$sheng?>", "<?=$sheng?>"]);
	_self.data("city1",["<?=$shi?>", "<?=$shi?>"]);
	_self.data("city2",["<?=$xian?>", "<?=$xian?>"]);
	//插入3个空的下拉框
	_self.append("<select name='province'></select>");
	_self.append("<select name='city1'></select>");
	_self.append("<select name='city2'></select>");
	//分别获取3个下拉框
	var $sel1 = _self.find("select").eq(0);
	var $sel2 = _self.find("select").eq(1);
	var $sel3 = _self.find("select").eq(2);
	//默认省级下拉
	if(_self.data("province")){
		$sel1.append("<option value='"+_self.data("province")[1]+"'>"+_self.data("province")[0]+"</option>");
	}
	$.each( GP , function(index,data){
		$sel1.append("<option value='"+data+"'>"+data+"</option>");
	});
	//默认的1级城市下拉
	if(_self.data("city1")){
		$sel2.append("<option value='"+_self.data("city1")[1]+"'>"+_self.data("city1")[0]+"</option>");
	}
	//默认的2级城市下拉
	if(_self.data("city2")){
		$sel3.append("<option value='"+_self.data("city2")[1]+"'>"+_self.data("city2")[0]+"</option>");
	}
	//省级联动 控制
	var index1 = "" ;
	$sel1.change(function(){
		//清空其它2个下拉框
		$sel2[0].options.length=0;
		$sel3[0].options.length=0;
		index1 = this.selectedIndex;
		if(index1==0){	//当选择的为 "请选择" 时
			if(_self.data("city1")){
				$sel2.append("<option value='"+_self.data("city1")[1]+"'>"+_self.data("city1")[0]+"</option>");
			}
			if(_self.data("city2")){
				$sel3.append("<option value='"+_self.data("city2")[1]+"'>"+_self.data("city2")[0]+"</option>");
			}
		}else{
			$.each( GT[index1-1] , function(index,data){
				$sel2.append("<option value='"+data+"'>"+data+"</option>");
			});
			$.each( GC[index1-1][0] , function(index,data){
				$sel3.append("<option value='"+data+"'>"+data+"</option>");
			})
		}
	}).change();
	//1级城市联动 控制
	var index2 = "" ;
	$sel2.change(function(){
		$sel3[0].options.length=0;
		index2 = this.selectedIndex;
		$.each( GC[index1-1][index2] , function(index,data){
			$sel3.append("<option value='"+data+"'>"+data+"</option>");
		})
	});
	return _self;
};

function CheckForm(){
	passQuestion=document.form1.passQuestion.value;
	passAnswer=document.form1.passAnswer.value;
	UserCard=document.form1.UserCard.value;
	UserName=document.form1.UserName.value;
	UserTel=document.form1.UserTel.value;
	UserAddress=document.form1.UserAddress.value;
	BankCard=document.form1.BankCard.value;
	BankUserName=document.form1.BankUserName.value;
	BankAddress=document.form1.BankAddress.value;
	password1=document.form1.password1.value;
	password2=document.form1.password2.value;
	if(password1.length == 0 || password1.length <6){
		alert("温馨提示:\n请输入最少六位数的一级密码.");
		document.form1.password1.focus();
		return false;
	}
	if(password2.length == 0 || password2.length <6){
		alert("温馨提示:\n请输入最少六位数的二级密码.");
		document.form1.password2.focus();
		return false;
	}
//	if(passQuestion.length == 0){
//		alert("温馨提示:\n请输入密码安全问题.");
//		document.form1.passQuestion.focus();
//		return false;
//	}
//	if(passAnswer.length == 0){
//		alert("温馨提示:\n请输入密码安全答案.");
//		document.form1.passAnswer.focus();
//		return false;
//	}
	if(UserCard.length == 0){
		alert("温馨提示:\n请输入身份证号码.");
		document.form1.UserCard.focus();
		return false;
	}
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
		alert("温馨提示:\n请输入联系地址.");
		document.form1.UserAddress.focus();
		return false;
	}
	if(BankCard.length == 0){
		alert("温馨提示:\n请输入开户帐号.");
		document.form1.BankCard.focus();
		return false;
	}
	if(BankUserName.length == 0){
		alert("温馨提示:\n请输入开户姓名.");
		document.form1.BankUserName.focus();
		return false;
	}
	if(BankAddress.length == 0){
		alert("温馨提示:\n请输入开户地址.");
		document.form1.BankAddress.focus();
		return false;
	}
	county=document.form1.city.value;
	
//	if(county== -1){
//		alert("温馨提示:\n请选择县区");
//		document.form1.city.focus();
//		return false;
//	}
	return true;
}
-->
</script>
</head>
<body>
<form name="form1" method="post" action="?ID=<?=$us['id']?>" onSubmit="return CheckForm();">
<table  width="100%" height="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
	<tr>
    <td colspan="2" align="center">详细资料</td>
    </tr>
    <tr>
    <td colspan="2" align="center">
   <input type="button" class="button" id="button" name="button" value="查看推荐图" onClick="window.location.href='../member/treeview.php?ID=<?=$uid?>&action=admin'" />
   <input type="button" class="button" id="button" name="button" value="查看网络图" onClick="window.location.href='../member/wlt2.php?ID=<?=$uid?>&action=admin'" />
   <input  type="button" class="button" id="button2" name="button2" value="查看奖金明细" onClick="window.location.href='../member/bonus.php?ID=<?=$uid?>&action=admin'" /></td>
    </tr>
    <tr>
    <td width="41%" align="right">会员编号：</td>
    <td width="59%" align="left"><?=$userid?></td>
  </tr>
    <tr>
    <td width="41%" align="right">会员编号：</td>
    <td width="59%" align="left"><?=$userid?></td>
  </tr>
  <tr style="display:none">
    <td width="41%" align="right">会员编号：</td>
    <td width="59%" align="left"><?=$nickname?></td>
  </tr>
  <tr>
    <td width="41%" align="right">服务中心：</td>
    <td width="59%" align="left"><?=$bdname?></td>
  </tr>
  <tr>
    <td width="41%" align="right">推荐人编号：</td>
    <td width="59%" align="left"><?=$rname?></td>
  </tr>
  <tr>
    <td width="41%" align="right">推荐人姓名：</td>
    <td width="59%" align="left"><?=$rusername?></td>
  </tr>
  <tr style="display: none">
    <td width="41%" align="right">修改推荐人：</td>
    <td width="59%" align="left"><input name="upreman" id="upreman" type="text"></td>
  </tr>
  <tr >
    <td width="41%" align="right">接点人编号：</td>
    <td width="59%" align="left"><?=$fathername?></td>
  </tr>
  <tr >
    <td width="41%" align="right">接点人姓名：</td>
    <td width="59%" align="left"><?=$fatherusername?></td>
  </tr>
  <tr>
    <td width="41%" align="right">注册时间：</td>
    <td width="59%" align="left"><?=$rdt?></td>
  </tr>
  <tr>
    <td width="41%" align="right">激活时间：</td>
    <td width="59%" align="left"><?=$pdt?></td>
  </tr>
  <tr  >
    <td width="41%" align="right">增减累计奖金：</td>
    <td width="59%" align="left"><?=$maxmey?><input name="maxmey" type="text" value="0"></td>
  </tr>
  <tr>
    <td width="41%" align="right">增减剩余奖金：</td>
    <td width="59%" align="left"><?=$mey?><input name="mey" type="text" value="0"></td>
  </tr>
  <tr >
    <td width="41%" align="right">增减报单币：</td>
    <td width="59%" align="left"><?=$zsq?><input name="zsq" type="text" value="0"></td>
  </tr>
  <tr style="display: none">
    <td width="41%" align="right">增减积分：</td>
    <td width="59%" align="left"><?=$gwb?><input name="gwb" type="text" value="0"></td>
  </tr>
  <!--  
   <tr >
    <td width="41%" align="right">增减豪车基金：</td>
    <td width="59%" align="left"><?=$jijin?><input name="jijin" type="text" value="0"></td>
  </tr>
  -->
   <tr >
    <td width="41%" align="right">增减复投币：</td>
    <td width="59%" align="left"><?=$cfxf?><input name="cfxf" type="text" value="0"></td>
  </tr>
  <tr >
    <td width="41%" align="right">增减爱心基金：</td>
    <td width="59%" align="left"><?=$wlf?><input name="wlf" type="text" value="0"></td>
  </tr>
  <?php if ($us['ispay']==3){?>
   <tr style="display: none">
    <td width="41%" align="right">增减回填金额：</td>
    <td width="59%" align="left"><?=$htjine?><input name="htjine" type="text" value="0"></td>
  </tr>
  <?php }?>
  <tr >
    <td width="41%" align="right">总业绩：</td>
    <td width="59%" align="left">A区
      <input name="area1" type="text" id="area1" value="<?=$area1?>" size="5" maxlength="50">
      B区
      <input name="area2" type="text" id="area2" value="<?=$area2?>" size="5" maxlength="50">
      <!--  
      C区
      <input name="area3" type="text" id="area3" value="<?=$area3?>" size="5" maxlength="50" >
      --></td>
  </tr>
  <tr >
    <td width="41%" align="right">结余业绩：</td>
    <td width="59%" align="left">A区
      <input name="yarea1" type="text" id="yarea1" value="<?=$yarea1?>" size="5" maxlength="50">
      B区
      <input name="yarea2" type="text" id="yarea2" value="<?=$yarea2?>" size="5" maxlength="50">
      <!--  
      C区
      <input name="yarea3" type="text" id="yarea3" value="<?=$yarea3?>" size="5" maxlength="50" >--></td>
  </tr>
   <tr >
    <td width="41%" align="right">福利奖业绩：</td>
    <td width="59%" align="left">A区
      <input name="area4" type="text" id="area5" value="<?=$area4?>" size="5" maxlength="50">
      B区
      <input name="area5" type="text" id="area5" value="<?=$area5?>" size="5" maxlength="50">
     </td>
  </tr>
  <tr>
    <td width="41%" align="right">会员资格：</td>
    <td width="59%" align="left">
    
      <select name="ulevel" id="ulevel">
      <?php 
	  	$sql="SELECT * FROM `ulevel`";
		if ($query=mysql_query($sql)){
			while($row=mysql_fetch_array($query)){
	  ?>
        	<option value="<?=$row['ulevel']?>" <?php if($row['ulevel']==$ulevel){?> selected <?php }?>><?=$row['lvname']?></option>
        <?php
			}
		}
		?>
      </select></td>
  </tr>
  <tr >
    <td width="41%" align="right">是否冻结：</td>
    <td width="59%" align="left"><input name="islock" type="radio" id="islock" value="1" <?php if ($islock==1){?> checked <?php }?>>
          冻结
        <input name="islock" type="radio" id="islock" value="0" <?php if ($islock==0){?> checked <?php }?>>
  解冻</td>
  </tr>
   <tr style="display: none">
        <td  width="41%" align="right">见点奖</td>
        <td  width="59%" align="left">
        <input type="radio" name="isfh" id="isfh" value="0" <?php if($us['isfh']==0){ ?> checked <?php }?>>开
        
        <input type="radio" name="isfh" id="isfh" value="1" <?php if($us['isfh']==1){ ?> checked <?php }?>>关

        
 </td>
  <tr style="display: none">
        <td  width="41%" align="right">静态分红点:</td>
        <td  width="59%" align="left"><?=$us['num']?></td>
        
        
 </td>
  <!--  
   <tr >
        <td  width="41%" align="right">会员状态</td>
        <td  width="59%" align="left">
        <input type="radio" name="isb2" id="isb2" value="0" <?php if($us['ispay']==0){ ?> checked <?php }?>>未激活
        
        <input type="radio" name="isb2" id="isb2" value="1" <?php if($us['ispay']==1){ ?> checked <?php }?>>实单

        <input type="radio" name="isb2" id="isb2" value="2" <?php if($us['ispay']==2){ ?> checked <?php }?>>空单
 </td>
 
 -->
  <tr>
    <td width="41%" align="right">一级密码：</td>
    <td width="59%" align="left">
      <input type="password" name="password1" id="password1" value="<?=$password1?>">
    </td>
  </tr>
  <tr>
    <td width="41%" align="right">二级密码：</td>
    <td width="59%" align="left">
      <input type="password" name="password2" id="password2" value="<?=$password2?>">
    </td>
  </tr>
     <tr style="display: none">
    <td width="41%" align="right">密码安全问题：</td>
    <td width="59%" align="left">
     
      <select name="passQuestion" id="passQuestion" >
                                        <option value="您母亲的姓名是？" <?php if($us['passquestion']=='您母亲的姓名是？'){?>selected<?php }?>>您母亲的姓名是？</option>
								        <option value="您父亲的姓名是？" <?php if($us['passquestion']=='您父亲的姓名是？'){?>selected<?php }?>>您父亲的姓名是？</option>
								        <option value="您配偶的姓名是？" <?php if($us['passquestion']=='您配偶的姓名是？'){?>selected<?php }?>>您配偶的姓名是？</option>
								        <option value="您父亲的生日是？" <?php if($us['passquestion']=='您父亲的生日是？'){?>selected<?php }?>>您父亲的生日是？</option>
								        <option value="您母亲的生日是？" <?php if($us['passquestion']=='您母亲的生日是？'){?>selected<?php }?>>您母亲的生日是？</option>
								        <option value="您配偶的生日是？" <?php if($us['passquestion']=='您配偶的生日是？'){?>selected<?php }?>>您配偶的生日是？</option>
								        <option value="您的出生地是？" <?php if($us['passquestion']=='您的出生地是？'){?>selected<?php }?>>您的出生地是？</option>
								        <option value="您的最喜欢的书是？" <?php if($us['passquestion']=='您的最喜欢的书是？'){?>selected<?php }?>>您的最喜欢的书是？</option>
								        <option value="您的最喜欢的电影是？" <?php if($us['passquestion']=='您的最喜欢的电影是？'){?>selected<?php }?>>您的最喜欢的电影是？</option>
								        <option value="您的最喜欢的颜色？" <?php if($us['passquestion']=='您的最喜欢的颜色？'){?>selected<?php }?>>您的最喜欢的颜色？</option>
                                     </select>   
    </td>
  </tr>
  <tr style="display: none">
    <td width="41%" align="right">密码安全答案：</td>
    <td width="59%" align="left">
      <input type="text" name="passAnswer" id="passAnswer" value="<?=$passAnswer?>">
    </td>
  </tr>
  <tr style="display:none">
    <td width="41%" align="right">身份证号码：</td>
    <td width="59%" align="left">
      <input type="text" name="UserCard" id="UserCard" value="<?=$UserCard?>">
    </td>
  </tr>
  <tr>
    <td width="41%" align="right">会员姓名：</td>
    <td width="59%" align="left">
      <input type="text" name="UserName" id="UserName" value="<?=$UserName?>">
    </td>
  </tr>
  <tr >
    <td align="right">联系电话：</td>
    <td align="left"><input type="text" name="UserTel" id="UserTel" value="<?=$UserTel?>"></td>
  </tr>
  <tr style="display:none">
    <td align="right">联系地址：</td>
    <td align="left"><div id="test"></div></td>
  </tr>
 
  <tr style="display:none">
    <td align="right">微信：</td>
    <td align="left"><input type="text" name="UserQQ" id="UserQQ" value="<?=$UserQQ?>"></td>
  </tr>
  <tr style="display:none">
    <td align="right">电子邮箱：</td>
    <td align="left"><input name="useremail" type="text" id="useremail" value="<?=$useremail?>" size="30" maxlength="50"></td>
  </tr>
  <tr>
    <td align="right">开户银行：</td>
    <td align="left"><input type="text" name="BankName" id="BankName" value="<?=$BankName?>"></td>
  </tr>
  <tr>
    <td align="right">开户帐号：</td>
    <td align="left"><input type="text" name="BankCard" id="BankCard" value="<?=$BankCard?>"></td>
  </tr>
  <tr>
    <td align="right">开户姓名：</td>
    <td align="left"><input type="text" name="BankUserName" id="BankUserName" value="<?=$BankUserName?>"></td>
  </tr>
  <tr>
    <td align="right">开户地址：</td>
    <td align="left"><input type="text" name="BankAddress" id="BankAddress" value="<?=$BankAddress?>"></td>
  </tr>
  <tr style="display:none">
    <td align="right">支付宝账号：</td>
    <td align="left"><input type="text" name="zhifubao" id="zhifubao" value="<?=$zhifubao?>"></td>
  </tr>
  <tr style="display:none">
    <td align="right">微信号：</td>
    <td align="left"><input type="text" name="caifutong" id="caifutong" value="<?=$caifutong?>"></td>
  </tr>
  <tr  style="display: none">
  	<td align="right">所属地区：</td>
    <td align="left">
    <select id="province" name="province">
    	<option value="-1">请选择省份</option>
    	<?php 
    		$sql="select * from province";
    		$ra=getAll($sql);
    		foreach($ra as $rs){
    	?>
    	
    	<option value="<?php echo $rs['provinceid'];?>" <?php if($rs['provinceid']==$us['sheng'])echo "selected";?> ><?php echo $rs['province']?></option>
    	<?php }?>
    </select>
    <select name="city" id="city">
    <option value="-1">请选择城市</option>
    <?php 
    		$sql="select * from city where fatherid={$us['sheng']}";
    		$rh=getAll($sql);
    		foreach($rh as $rs){
    	?>
    	  <option value="<?php echo $rs['cityid']?>" <?php if($rs['cityid']==$us['shi'])echo "selected";?> ><?php echo $rs['city']?></option>
    	<?php }?>
    </select>
     <select name="county" id="county">
     	<option value="-1">请选择县区</option>
    	<?php 
    		$sql="select * from area where fatherid={$us['shi']}";
    		$rss=getAll($sql);
    		foreach($rss as $rs){
    	?>
    	  <option value="<?php echo $rs['areaid']?>" <?php if($rs['areaid']==$us['xian'])echo "selected";?> ><?php echo $rs['area']?></option>
    	<?php }?>
    </select>
    </td>
    </tr>
    
   <tr >
    <td align="right">收货详细地址：</td>
    <td align="left"><input name="UserAddress" type="text" id="UserAddress" value="<?=$UserAddress?>" size="30" maxlength="100"></td>
  </tr>
  
  <tr>
    <td colspan="2" align="center">
      <table align="center">
        <tr>
          <td><input name="submit" id="submit" type="submit" class="btn2" value="修改">
          <input name="" type="reset" class="btn3" value="重置"></td>
        </tr>
      </table>
    
    </td>
  </tr>
</table>
</form>
</body>
</html>