<?php 
include("admin_check.php");
include_once("../function.php");
include_once("../class/bonus_class.php");
include_once("../class/system_class.php");
include_once("action.php");
session_start();
header("Content-Type: text/html;charset=utf-8");
checkqx(3,26);

if ($_POST['button1']){
	$m = $_POST['jine2-1'];
	
	
	$bonus_cl=new bonus_class();
	if ($m>0){
	   
		$bonus_cl->fh1($m);
		$bonus_cl->b0bonus();
	
		action::record("回本奖","1",$_SESSION['adminid'],"$m");
		echo "<script language=javascript>alert('结算完成.');window.location.href='?'</script>";
	   
	}else {
		echo "<script language=javascript>alert('分红额有误，请从新填写.');window.location.href='?'</script>";
	}
}
if ($_POST['button2']){
	$m = $_POST['jine2-2'];
	$bonus_cl=new bonus_class();
	if ($m>0){

		$bonus_cl->fh2($m,1);
		$bonus_cl->b0bonus();
		
		action::record("5000级别福利奖","1",$_SESSION['adminid'],"$m");
		echo "<script language=javascript>alert('结算完成.');window.location.href='?'</script>";

	}else {
		echo "<script language=javascript>alert('分红额有误，请从新填写.');window.location.href='?'</script>";
	}
}
if ($_POST['button3']){
	$m = $_POST['jine2-3'];
	$bonus_cl=new bonus_class();
	if ($m>0){

		$bonus_cl->fh2($m,2);
		$bonus_cl->b0bonus();
		action::record("10000级别福利奖","1",$_SESSION['adminid'],"$m");
		echo "<script language=javascript>alert('结算完成.');window.location.href='?'</script>";

	}else {
		echo "<script language=javascript>alert('分红额有误，请从新填写.');window.location.href='?'</script>";
	}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>奖金结算</title>
<link href="css/table.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<form action="?" method="post">
<table width="100%" cellpadding="5" cellspacing="1" border="0" align="center" class="table1">
<tr>
<td align="center" colspan="10"><font style="color: #8A2BE2" size="6">福利奖</font></td>
</tr>
  <tr>
    	<td align="center">项目</td>
    	<td align="center" >总人数</td>
    	
        <td align="center" >业绩</td>
        <td align="center" >分红额</td>
        <td align="center" >操作</td>
  </tr>
  <?php
  	$_ulevel_cl=new ulevel_class();
//   	$sql="select area4,area5,area6,area7 from member where id=1";
//   	$us=getOne($sql);
  	for ($i=1;$i<=1;$i++){
	   
// 	    $rss = zjulevel(0);
  		$sql="select count(*) from member where  ispay>0";
		$result = mysql_query($sql);
		$array = mysql_fetch_assoc($result);
		

		$sys=getOne("select * from systemparameters where id=1");
		
  ?>
  	<tr>
  	  <td style="display:none;"><input type="hidden" name="id<?=$i?>" value="<?=$i?>" /></td>
		<?php if($i == 1){?><td align="center" >回本奖</td><?php }?>
	  	<?php if($i == 1){?><td align="center" ><?=$array['count(*)']?></td><?php }?>
        <?php if($i == 1){?><td align="center" ><?=$sys['fanli']?></td><?php }?>
	  	 <td align="center"><input type="text" name="jine2-<?php echo $i?>" value="<?php echo $sys['fanli']*0.1 ?>" size="10"/></td>
	     <td align="center" colspan="3"  >
	     <input type="submit" class="button" id="button" name="button<?php echo $i?>" value="分红结算" style="width:100px" />
	   
	     </td>
	  	</tr>
  <?php }?>
 
  	
  
 <!--  
</table>
<table  width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
   <tr>
    <td width="46%" height="22" align="right">精英：</td>
    <td width="54%" align="left"> <input type="button" class="button" id="button" name="button" value="会员名单" onClick="window.location.href='admin_zjuluel1.php?'" /></td>
  </tr>
  	<tr>
    <td width="46%" height="22" align="right">总监：</td>
    <td width="54%" align="left"> <input type="button" class="button" id="button" name="button" value="会员名单" onClick="window.location.href='admin_zjuluel2.php?'" /></td>
  </tr>
 	<tr>
    <td width="46%" height="22" align="right">股东：</td>
    <td width="54%" align="left"> <input type="button" class="button" id="button" name="button" value="会员名单" onClick="window.location.href='admin_zjuluel3.php?'" /></td>
  </tr>
 </tr>
 	<tr>
    <td width="46%" height="22" align="right">CEO：</td>
    <td width="54%" align="left"> <input type="button" class="button" id="button" name="button" value="会员名单" onClick="window.location.href='admin_zjuluel4.php?'" /></td>
  </tr>
</table>
-->
</form>
</body>
</html>