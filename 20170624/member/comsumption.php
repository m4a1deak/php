<?php
header("Content-Type: text/html;charset=utf-8");
include("check.php");
include("check2.php");
include_once("../function.php");
include_once("../class/email_class.php");
include_once("../class/member_class.php");
include_once("../class/bonus_class.php");
include_once("../class/system_class.php");

session_start();

function printTable($_id,$_goodsimg,$_goodsname,$_price){
	echo "<table height=266 border=0 style='width:200px;height:240px;border-left: #0FF solid 1px; border-right: #0FF solid 1px; border-bottom:#0FF solid 1px; border-top:#0FF solid 1px; float:left; margin:8px;'>";
    echo "<tr>";
    echo "<td><a href='goodscontent.php?id=".$_id."' style='text-decoration:none'><img src=../upload/".$_goodsimg." width=200 height=200 border=0></a></td>";
    echo "</tr>";
  	echo "<tr>";
    echo "<td height=20 align=center><strong>".$_goodsname."</strong></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td height=20>价格：<font color=#FF0000>￥".$_price."</font></td>";
  	echo "</tr>";
	echo "</table>";
}


$us=getMemberbyID($_SESSION['ID']);

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/table.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<title>购物商城</title>
<SCRIPT LANGUAGE=javascript>
<!--
function SelectAll() {
	for (var i=0;i<document.form1.UID.length;i++) {
		var e=document.form1.UID[i];
		e.checked=!e.checked;
	}
}
function jiage(numname,pic){
	var price=document.getElementById(pic).value
	var num=numname.value;
	var reg=/^[1-9]{1,}\d*$/;
	if(!reg.test(num)){
		numname.value=0;
		return;
	}
	
		var zong=num*price;
	
	document.getElementById(pic+"zong").innerText=zong;
	
	
	document.getElementById("zongjiage").innerText=zong;
}
function zjiage(){
	zongjiage=0;
	var uid=document.getElementsByName('UID[]');
	for (var i=0;i<uid.length;i++) {
		var e=uid[i];
		if (e.checked==true){
			var jiage=document.getElementById(e.value).value;
			var shuangliang=document.getElementById(e.value+"num").value;
			zongjiage=zongjiage+jiage*shuangliang;
		}
	}
	document.getElementById("zongjiage").innerText=zongjiage;
}



function check(a){
	var b;
	switch(a){
	case 'goodslist9.php':b="积分";break;
	case 'goodslist8.php':b="复投币";break;
	case 'goodslist7.php':b="报单消费币";break;
	}
	
	var z=document.getElementById("zongjiage").innerHTML;
	var flag=confirm("此次消费将扣除"+z+b+",您确定要结算吗？");
	if(flag){
		return true;
	}
	return false;
}
-->
</script>
<style type="text/css">
*{margin:0; padding:0; font-size:12px;}
#tablit {margin:0px;width:100%; height:400; border:#BCE2F3 1px solid;padding-top:10px;background:#E4F2FB;}
#tablit dl{ float:left; width:100%;}
#tablit dl dt{float:left;border-bottom:#64B8E4 1px solid; width:15px; height:31px; line-height:30px;}
#tablit dl dd{float:left;width:110px;height:30px; line-height:30px; text-align:center;}
#tablit .on{
	border:#64B8E4 1px solid;
	border-bottom:#FFF 1px solid;
	color:#FF6600;
	font-weight: bold;
}
#tablit .out{
	border:#64B8E4 1px solid;
	color:#000;
	background:#64B8E4;
	font-weight: bold;
}
.tabcon{width:99%; height:365px; clear:both;}
.dis{display:none;}
</style>
</head>
<body>
<form name="form1" method="post" action="<?php echo $_GET['yemian'];?>" onsubmit="return check('<?php echo $_GET['yemian'];?>');">

<div style="font-size:18px;">
	<div style="margin:20px;">
			<h2>收货人信息 </h2>
			<div style="margin:5px 0px 0px 0px;">
				<div style="display:inline;margin-top:5px;" id="name">姓名：<input type="text" name="name" value="<?php echo  $us['username'];?>"/></div>
				<div style="display:inline;padding-left:10px;margin-top:5px;" id="usertel">电话：<input type="text" name="usertel" value="<?php echo  $us['usertel'];?>"/></div>
				<div id="address">地址：<input type="text" name="address" value="<?php $length=userdiqu($us['id']).$us['useraddress'];echo $length;?>" size="<?php echo strlen($length);?>"/></div>
			</div>
			
	</div>
</div>
<table width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
 		<tr>
       
       
        <td height="30" align="center" >产品名称</td>
        <td align="center" >价格</td>
        <td align="center">pv</td>
        
        <td align="center" >购买数量</td>
        <td align="center" >总价格</td>
        
      </tr>
 		<?php
 		foreach($_POST['UID'] as $id){
 		
      	$sql = "SELECT * FROM `goods` WHERE id={$id}";
		if($query = mysql_query($sql)){
			while ($row=mysql_fetch_array($query)){
$num=$_POST[$row['id']."num"];
	
			?>	
      <tr style="height:25px;">
      <input type="hidden" name="UID[]" value="<?php echo $row['id'];?>" />
      	<td align="center" ><?=$row['goodsname']?></td>
        <td align="center" ><?=$row['price']?></td>
        <td align="center" ><?=$row['pv']?></td>
        <input type="hidden" name="<?php echo $row['id']."num";?>" value="<?php echo $num;?>"/>
        <td align="center" > <?php echo $num;?></td>
        <td align="center" ><label name="<?=$row['id']?>zong" id="<?=$row['id']?>zong"><?php $single+=$row['price']*$num;echo $row['price']*$num?></label></td>
       </tr>
	  <?php
      		}
		}
		}
	  ?>
      <tr><td colspan="4"><input name="button3" type="submit" class="button_green" id="button3" value="结 算" >  </td>
        <td>总计金额：<label name="zongjiage" id="zongjiage"><?php echo $single;?></label></td>
      </tr>
     
    </table>
    </form>
</body>
</html>