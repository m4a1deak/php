<?php
include("check.php");
include("check2.php");
include_once("../function.php");
header("Content-Type: text/html;charset=utf-8");
session_start();
$us=que_select_cl('member',$_SESSION['ID']);
$ul=ulevel($us['ulevel']);
$j=$ul['yl20'];
$e=$ul['yl19'];
$sql="select fuwuzhongxi from systemparameters where id=1";
$rs=getOne($sql);
if ($_POST['submit']){
	$uid=$_SESSION['ID'];
	$res=getMemberbyID($uid);
	$ues=getMemberbyID($res['reid']);
	if($_POST['bdlevel']==1){
		if ($ues['bdlevel']>=1){
		    if($us['isbd']<1){
		        $sql="update member set isbd=1,bdlevel=1 where id={$uid}";
		        mysql_query($sql);
		     
		        alert("申请提交成功，请等待审核通过。");
		    }else{
		    	alert("您已申请为服务中心，请不要重复申请","?");
		    }
		}else {
			alert("申请服务中心级别不能大于推荐人，请重新申请","?");
		}
			
	}
	
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/table.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>服务中心申请</title>
<script src='../js/shengshixian/jquery-1[1].2.6.js'></script>
<script src="../js/shengshixian/jquery.provincesCity.js" type="text/javascript"></script>
<script src="../js/shengshixian/provincesdata.js" type="text/javascript"></script>
 <script>
	//调用插件
	$(function(){
		$("#test").ProvinceCity();
		$("#a1").click(function(){
			$("#diqu").hide();
			$("#jine").val("<?php echo $j;?>");
			$("#jinebar").hide();
			
		});
		$("#a2").click(function(){
			$("#diqu").show();
			$("#jine").val("<?php echo $j;?>");
			$("#jinebar").show();
			$("#county").show();
		});
		$("#a3").click(function(){
			$("#diqu").show();
			$("#jine").val("<?php echo $e;?>");
			$("#jinebar").show();
			$("#county").hide();
		});
		$("#province").change(function(){
			$.ajax({
				type:"get",
				url:"diqu.php?province="+this.value,
				dataType:"text",
				success:function(a){
					$("#city").html(a);
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
	function check(){
		var county=document.form1.county.value;
		var city=document.form1.city.value;
		var ra=document.getElementsByName('bdlevel');
		for(var i=0;i<ra.length;i++){
				if(ra[i].checked ==true){
						var rav=ra[i].value;
					}
			}
		if(rav==2){
			if(county<0){
				alert("请选择县");
				return false;
			}
		}else if(rav==3){
			if(city<0){
				alert("请选择市");
				return false;
			}
		}
		
		return true;
			
	}
  </script>
  <style>
	#test select{
		width:100px;
	}
	.yincang{
	display:none;
	}
	xianshi{
	display:block;
	}
  </style>
</head>
<body>
<form name="form1" method="post" action="?" onsubmit="return check();">
<?php
	$_member=que_select_cl('member',$_SESSION['ID']);
	if ($_member['isbd']<2){
?>
<table  width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
  <tr style="display:none">
    <td width="35%" height="22" align="right">申请会员编号：</td>
    <td width="65%" align="left"><input name="nickname" type="text" id="nickname" size="20" maxlength="20" value="<?=$_SESSION['nickname']?>" readonly></td>
  </tr>
  <tr style="display:none">
    <td width="35%" height="22" align="right">服务中心名称：</td>
    <td width="65%" align="left"><input name="bdnickname" type="text" id="bdnickname" size="20" maxlength="20" value=""></td>
  </tr>
  <tr >
    <td width="35%" height="22" align="right">服务中心级别：</td>
    <td  width="65%" align="left">
       <select  name="bdlevel" id="bdlevel">
        <option value="1">1w</option>
        <option value="2">2w</option>
        <option value="3">3w</option>
        <option value="4">30w</option>
        <option value="5">300w</option>
      </select> 
<!--       <input type="radio" id="a1" name="bdlevel" value="1" checked="checked"/> -->
      
<!--       <label for="a1">服务中心</label> -->
    
<!--       <input type="radio" id="a2" name="bdlevel" value="2"/><label for="a2">县级代理</label> -->
     
<!--       <label ><input type="radio" id="a3" name="bdlevel" value="3"/><label for="a3">市级代理</label> -->
      
     
      </td>
  </tr>
  
  <tr id="jinebar" style="display:none">
    <td height="22" align="right">申请金额：</td>
    <td align="left"><input readonly name="jine" readonly type="text" id="jine" value="" size="20" maxlength="20"></td>
  </tr>
  <tr style="display:none">
    <td height="22" align="right">备注：</td>
    <td align="left">
      <textarea name="bdbeizhu" id="bdbeizhu" cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input name="submit" id="submit" type="submit" class="button_green" value="申  请"></td>
  </tr>
</table>
<?php
	}else if($_member['isbd']==1){
		echo "您的申请已经提交,正在审核中,请耐心等待.";	
	}else if($_member['isbd']>=2){
		$name="服务中心";
		if($_member['isbd']==3){
			switch($_member['bdlevel']){
				case 1:$name="县区店";break;
				case 2:$name="市级店";break;
				case 2:$name="省级店";break;
			}
			
			$diqu="您代理的地区为:".lol($_member['bddiqu'],$_member['bdlevel']);
		}
		echo "您申请的{$name}已通过管理员审核,您的服务中心编号为：".$_SESSION['nickname'].", ".$diqu;		
	}
?>
</form>
</body>
</html>