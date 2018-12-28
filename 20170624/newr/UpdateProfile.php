<?php
include("check.php");
include_once("../function.php");
include_once("../class/system_class.php");
header("Content-Type: text/html;charset=utf-8");
session_start();
	if($_SESSION['isbd']==2){
		$ID=$_GET['id'];
	}
	if($ID==""){
		$ID=$_SESSION['ID'];
	}
	$member=getMemberbyID($ID);
	$nickname=$member['nickname'];
	$passQuestion=$member['passquestion'];
	$passAnswer=$member['passanswer'];
	$UserCard=$member['usercard'];
	$UserName=$member['username'];
	$UserTel=$member['usertel'];
	$UserAddress=$member['useraddress'];
	$UserQQ=$member['userqq'];
	$useremail=$member['useremail'];
	$BankName=$member['bankname'];
	$BankCard=$member['bankcard'];
	$BankUserName=$member['bankusername'];
	$BankAddress=$member['bankaddress'];
	$sheng=$member['sheng'];
	$shi=$member['shi'];
	$xian=$member['xian'];
	$sex=$member['sex'];
	$nian=$member['nian'];
	$yue=$member['yue'];
	$ri=$member['ri'];
	$sex=$member['sex'];
	$xueli=$member['xueli'];
$zhifubao=$member['zhifubao'];
$caifutong=$member['caifutong'];
	
if ($_POST['submit']){
	$_system=new system_class();
	$sys=$_system->system_information(1);
	if($sys['ziliao']==1){
		$ID=$_POST['uid'];
		$_us['passquestion']=$_POST['passQuestion'];
		$_us['passanswer']=$_POST['passAnswer'];
		$_us['usercard']=$_POST['UserCard'];
		$_us['username']=$_POST['UserName'];
		$_us['usertel']=$_POST['UserTel'];
		$_us['useraddress']=$_POST['UserAddress'];
		$_us['userqq']=$_POST['UserQQ'];
		$_us['bankname']=$_POST['BankName'];
		$_us['bankcard']=$_POST['BankCard'];
		$_us['bankusername']=$_POST['BankUserName'];
		$_us['bankaddress']=$_POST['BankAddress'];
		$_us['useremail']=$_POST['useremail'];
		$_us['sheng']=$_POST['province'];
		$_us['shi']=$_POST['city'];
		$_us['xian']=$_POST['county'];
		$_us['nian']=$_POST['nian'];
		$_us['yue']=$_POST['yue'];
		$_us['ri']=$_POST['ri'];
		$_us['sex']=$_POST['sex'];
		$_us['xueli']=$_POST['xueli'];
$_us['zhifubao']=$_POST['zhifubao'];
$_us['caifutong']=$_POST['caifutong'];
		echo edit_update_cl('member',$_us,$ID);
		echo "<script language=javascript>alert('资料修改成功.');window.location.href='?id=".$ID."'</script>";	
	}else{
		echo "<script language=javascript>alert('系统暂时关闭修改资料功能,如需修改请联系管理员.');window.location.href='?id=".$ID."'</script>";		
	}
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'header.php';?>
<script src="../js/calendar.js"></script>
</head>
<body>
<?php include 'navbar.php';?>
<div id="content">
  <div class="container">
    <div class="row">
      <?php include 'leftsider.php';?>
      <div class="span9" >
      
      
<title>个人资料</title>
<script src='../js/ssjl_jquery.js'></script>
<script src="../js/shengshixian/provincesdata.js" type="text/javascript"></script>
  <script>
	//调用插件
	$(function(){
		$("#test").ProvinceCity();

		$("#province").change(function(){
			
			$.ajax({
				type:"get",
				url:"diqu.php?province="+this.value,
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
				url:"diqu.php?city="+this.value,
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
	return true;
}
-->
</script>
<style>
	#test select{
		width:100px;
	}
  </style>
</head>
<form name="form1" method="post" action="?" onSubmit="return CheckForm();">
<table  width="100%" height="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
     <tr  style="display:none">
    <td width="30%" align="right">密码安全问题：</td>
    <td width="70%" align="left">
      <input type="text" name="passQuestion" id="passQuestion" value="<?=$passQuestion?>">
    </td>
  </tr>
  <tr  style="display:none">
    <td width="30%" align="right">密码安全答案：</td>
    <td width="70%" align="left">
      <input type="text" name="passAnswer" id="passAnswer" value="<?=$passAnswer?>">
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center">会员资料<input name="uid" type="hidden" value="<?=$ID?>"></td>
    </tr>
    <tr>
    <td width="40%" align="right">会员编号：</td>
    <td width="60%" align="left">
      <?=$nickname?>
    </td>
  </tr>
  <tr>
    <td width="30%" align="right">会员姓名：</td>
    <td width="70%" align="left">
      <input type="text" name="UserName" id="UserName" value="<?=$UserName?>" >
    </td>
  </tr>
  <tr style="display: none">
    <td width="30%" align="right">身份证号码：</td>
    <td width="70%" align="left">
      <input type="text" name="UserCard" id="UserCard" value="<?=$UserCard?>">
    </td>
  </tr>
  
  <tr style="display:none">
    <td width="30%" align="right">性别：</td>
    <td width="70%" align="left"><input name="sex" type="radio" id="sex" value="1" <?php if($sex==1){?> checked <?php }?>>
      男
      <label for="radio">
        <input type="radio" name="sex" id="sex" value="0" <?php if($sex==0){?> checked <?php }?>>
        女
      </label></td>
  </tr>
  <tr style="display:none">
    <td align="right">出生日期：</td>
    <td align="left"><label for="select"></label>
      <select name="nian" id="nian">
      <?php for($i=1930;$i<=2030;$i++){?>
        <option value="<?=$i?>" <?php if($nian==$i)echo "selected"?>><?=$i?></option>
        <?php }?>
      </select>
      年
      <select name="yue" id="yue">
      <?php for($i=1;$i<=12;$i++){?>
        <option value="<?=$i?>" <?php if($yue==$i)echo "selected"?>><?=$i?></option>
        <?php }?>
      </select>
      月
      <select name="ri" id="ri">
      <?php for($i=1;$i<=31;$i++){?>
        <option value="<?=$i?>" <?php if($ri==$i)echo "selected"?>><?=$i?></option>
        <?php }?>
      </select>
      日</td>
  </tr>
  <tr style="display:none">
    <td align="right">学历：</td>
    <td align="left">
      <select name="xueli" id="xueli">
        <option value="小学" <?php if($xueli=="小学"){?> selected <?php }?>>小学</option>
        <option value="初中" <?php if($xueli=="初中"){?> selected <?php }?>>初中</option>
        <option value="高中" <?php if($xueli=="高中"){?> selected <?php }?>>高中</option>
        <option value="中专" <?php if($xueli=="中专"){?> selected <?php }?>>中专</option>
        <option value="大学" <?php if($xueli=="大学"){?> selected <?php }?>>大学</option>
        <option value="本科" <?php if($xueli=="本科"){?> selected <?php }?>>本科</option>
      </select>
      </td>
  </tr>
  <tr style="display:none">
    <td colspan="2" align="center">通讯地址</td>
    </tr>
    <tr style="display: none">
  	<td align="right">所属地区：</td>
    <td align="left">
    <select id="province" name="province">
    	
    	<?php 
    		$sql="select * from province";
    		$ra=getAll($sql);
    		foreach($ra as $rs){
    	?>
    	
    	<option value="<?php echo $rs['provinceid'];?>" <?php if($rs['provinceid']==$member['sheng'])echo "selected";?> ><?php echo $rs['province']?></option>
    	<?php }?>
    </select>
    <select name="city" id="city">
    <?php 
    		$sql="select * from city where fatherid={$member['sheng']}";
    		$rh=getAll($sql);
    		foreach($rh as $rs){
    	?>
    	  <option value="<?php echo $rs['cityid']?>" <?php if($rs['cityid']==$member['shi'])echo "selected";?> ><?php echo $rs['city']?></option>
    	<?php }?>
    </select>
     <select name="county" id="county">
    	<?php 
    		$sql="select * from area where fatherid={$member['shi']}";
    		$rss=getAll($sql);
    		foreach($rss as $rs){
    	?>
    	  <option value="<?php echo $rs['areaid']?>" <?php if($rs['areaid']==$member['xian'])echo "selected";?> ><?php echo $rs['area']?></option>
    	<?php }?>
    </select>
    </td>
  </tr>
    <tr >
  	<td align="right">收货详细地址：</td>
    <td align="left">
<input name="UserAddress" type="text" id="UserAddress" value="<?=$UserAddress?>" size="30" maxlength="100"></td>
  </tr>
  <tr>
    <td align="right">联系电话：</td>
    <td align="left"><input type="text" name="UserTel" id="UserTel" value="<?=$UserTel?>"></td>
  </tr>
  <tr style="display:none">
    <td align="right">电子邮件：</td>
    <td align="left"><input name="useremail" type="text" id="useremail" value="<?=$useremail?>" size="30" maxlength="50"></td>
  </tr>
  
  <tr>
    <td colspan="2" align="center">银行账户资料</td>
    </tr>
 
  <tr>
    <td align="right">开户帐号：</td>
    <td align="left">
      <select name="BankName" id="BankName">
        <option value="中国银行" <?php if($BankName=='中国银行'){?>selected<?php }?>>中国银行</option>
        <option value="中国农业银行" <?php if($BankName=='中国农业银行'){?>selected<?php }?>>中国农业银行</option>
        <option value="中国工商银行" <?php if($BankName=='中国工商银行'){?>selected<?php }?>>中国工商银行</option>
        <option value="中国招商银行" <?php if($BankName=='中国招商银行'){?>selected<?php }?>>中国招商银行</option>
        <option value="中国建设银行" <?php if($BankName=='中国建设银行'){?>selected<?php }?>>中国建设银行</option>
        <option value="邮政储蓄银行" <?php if($BankName=='邮政储蓄银行'){?>selected<?php }?>>邮政储蓄银行</option>
          <option value="中国华夏银行" <?php if($BankName=='中国华夏银行'){?>selected<?php }?>>中国华夏银行</option>
          <option value="中国农商银行" <?php if($BankName=='中国农商银行'){?>selected<?php }?>>中国农商银行</option>
          <option value="中国交通银行" <?php if($BankName=='中国交通银行'){?>selected<?php }?>>中国交通银行</option>
         
       
      
        
        
        
        
     
        
        
      </select></td>
  </tr>
  <tr >
    <td align="right">开户帐号：</td>
    <td align="left"><input type="text"  name="BankCard" id="BankCard" value="<?=$BankCard?>" ></td>
  </tr>
  <tr >
    <td align="right">开户姓名：</td>
    <td align="left"><input type="text"  name="BankUserName" id="BankUserName" value="<?=$BankUserName?>" ></td>
  </tr>
  <tr >
    <td align="right">开户地址：</td>
    <td align="left"><input type="text"  name="BankAddress" id="BankAddress" value="<?=$BankAddress?>" ></td>
  </tr>
  <tr style="display: none">
    <td align="right">支付宝：</td>
    <td align="left"><input type="text" name="zhifubao" id="zhifubao" value="<?=$zhifubao?>" ></td>
  </tr>
  <tr style="display: none">
    <td align="right">微信号：</td>
    <td align="left"><input type="text" name="caifutong" id="caifutong" value="<?=$caifutong?>" ></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <table align="center">
        <tr>
          <td><input name="submit" id="submit" type="submit" class="button_green" value="修  改">
          <input name="" type="reset" class="button_red" value="重  置"></td>
        </tr>
      </table>
    
    </td>
  </tr>
</table>
</form>

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