

<?php 
include("admin_check.php");
include_once("../function.php");
include_once("../class/bonus_class.php");
include_once("../class/system_class.php");
session_start();
header("Content-Type: text/html;charset=utf-8");
checkqx(3,26);

if ($_POST['button1']){
	$m = $_POST['jine2-1'];
	$bonus_cl=new bonus_class();
	if ($m>0){
		$bonus_cl->b4bonus($m,1);
		echo "<script language=javascript>alert('主任晋级奖结算完成.');window.location.href='?'</script>";
	}else {
		echo "<script language=javascript>alert('月薪金额有误，请从新填写.');window.location.href='?'</script>";
	}
}
if ($_POST['button2']){
	$m = $_POST['jine2-2'];
	$bonus_cl=new bonus_class();
	if ($m>0){
		$bonus_cl->b4bonus($m,2);
		echo "<script language=javascript>alert('经理晋级奖结算完成.');window.location.href='?'</script>";
	}else {
		echo "<script language=javascript>alert('月薪金额有误，请从新填写.');window.location.href='?'</script>";
	}
}
if ($_POST['button3']){
	$m = $_POST['jine2-3'];
	$bonus_cl=new bonus_class();
	if ($m>0){
		$bonus_cl->b4bonus($m,3);
		echo "<script language=javascript>alert('总监晋级奖结算完成.');window.location.href='?'</script>";
	}else {
		echo "<script language=javascript>alert('月薪金额有误，请从新填写.');window.location.href='?'</script>";
	}
}
if ($_POST['button4']){
	$m = $_POST['jine2-4'];
	$bonus_cl=new bonus_class();
	if ($m>0){
		$bonus_cl->b4bonus($m,4);
		echo "<script language=javascript>alert('总裁晋级奖结算完成.');window.location.href='?'</script>";
	}else {
		echo "<script language=javascript>alert('分红金额有误，请从新填写.');window.location.href='?'</script>";
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>积分结算</title>
<link href="css/table.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<form action="?" method="post">
<table width="100%" cellpadding="5" cellspacing="1" border="0" align="center" class="table1">
<tr>
<td align="center" colspan="10"><font style="color: #8A2BE2" size="6">晋级奖</font></td>
</tr>
  <tr>
    	<td align="center">会员级别</td>
    	<td align="center" >总人数</td>
        <td colspan="2" align="center" >月薪</td>
        <td align="center" >操作</td>
  </tr>
  <?php
  	$_ulevel_cl=new ulevel_class();
  	for ($i=1;$i<=4;$i++){
        $array['count(*)']=0;       
	    
  		$sql="select count(*) from member where zjulevel=$i and ispay>0";
		$result = mysql_query($sql);
		$array = mysql_fetch_assoc($result);
		
		
		$sql="select * from zjulevel where id=$i ";
		$sys=getOne($sql);
		
  ?>
  	<tr>
  	  <td style="display:none;"><input type="hidden" name="id<?=$i?>" value="<?=$i?>" /></td>
	     <td align="center" ><?=$sys['zjname']?></td>
	  	 <td align="center" ><?php echo $array['count(*)'];?></td>
	  	 <td align="center"  colspan="2" ><input type="text" name="jine2-<?php echo $i?>" value="<?=$sys['lsk']?>" size="20"/></td>
	     <td align="center" colspan="3"  ><input type="submit" class="button" id="button" name="button<?php echo $i?>" value="晋级奖发放" style="width:100px" /></td>
	  	</tr>
  <?php }?>
 
  	
  
 
</table>
</form>
</body>
</html>