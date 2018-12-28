<?php
include("check.php");
include_once("../function.php");
include_once("../class/txczzh_class.php");
date_default_timezone_set('PRC');
$txczzh_cl=new txczzh_class();
$ytx=$txczzh_cl->gettxbyuidisgrant($_SESSION['ID'],1);
$dtx=$txczzh_cl->gettxbyuidisgrant($_SESSION['ID'],0);
$ycz=$txczzh_cl->getczbyuidisgrant($_SESSION['ID'],1);
$dcz=$txczzh_cl->getczbyuidisgrant($_SESSION['ID'],0);
$zzzc=$txczzh_cl->getzzbyuid($_SESSION['ID']);
$zzsr=$txczzh_cl->getzzbysid($_SESSION['ID']);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/table.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<title>会员信息</title>
<style type="text/css">
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
</style>
</head>

<body style="width:100%; height:600px;">
<?php
$us=getMemberbyID($_SESSION['ID']);
?>
<?php 
function ip(){
	if(getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'), 'unknown')) {  
		$ip = getenv('HTTP_CLIENT_IP');
	 } elseif(getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'), 'unknown')) {  $ip = getenv('HTTP_X_FORWARDED_FOR');
	  } elseif(getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'), 'unknown')) {  $ip = getenv('REMOTE_ADDR'); 
	  } elseif(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], 'unknown')) {  $ip = $_SERVER['REMOTE_ADDR']; 
	  } return preg_match("/[\d\.]{7,15}/", $ip, $matches) ? $matches[0] : 'unknown';}
	  $ip=ip();
	  $us_update['ip']=$ip;
	  edit_update_cl('member',$us_update,$us['id']);
	  ?>

<table width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
<tr >
	<th align="center" style="font-size: 20px" colspan="2">你的团队信息</th>
</tr>
<tr>
 	<td align="center" style="font-size: 20px">层数</td>
    <td align="center" style="font-size: 20px">数量</td>
  </tr>
  <?php 
	$plevel=$us['plevel'];  
  	$sql="select id from member where plevel=$plevel+1 and ppath like '%".$us['id']."%'";
  	$query=mysql_query($sql);
  	$num1=mysql_num_rows($query);
  ?>
  <tr>
 	<td align="center">1</td>
 	 
    <td align="center"><?=$num1?>/3</td>
  </tr>
   <?php 
	$plevel=$us['plevel'];  
  	$sql="select id from member where plevel=$plevel+2 and ppath like '%".$us['id']."%' ";
  	$query=mysql_query($sql);
  	$num2=mysql_num_rows($query);
  ?>
  <tr>
 	<td align="center">2</td>
 	 
    <td align="center"><?=$num2?>/9</td>
  </tr>
   <?php 
	$plevel=$us['plevel'];  
  	$sql="select id from member where plevel=$plevel+3  and ppath like '%".$us['id']."%'";
  	$query=mysql_query($sql);
  	$num3=mysql_num_rows($query);
  ?>
  <tr>
 	<td align="center">3</td>
 	 
    <td align="center"><?=$num3?>/27</td>
  </tr>
   <?php 
	$plevel=$us['plevel'];  
  	$sql="select id from member where plevel=$plevel+4 and ppath like '%".$us['id']."%' ";
  	$query=mysql_query($sql);
  	$num4=mysql_num_rows($query);
  ?>
  <tr>
 	<td align="center">4</td>
 	 
    <td align="center"><?=$num4?>/81</td>
  </tr>
    <?php 
	$plevel=$us['plevel'];  
  	$sql="select id from member where plevel=$plevel+5  and ppath like '%".$us['id']."%'";
  	$query=mysql_query($sql);
  	$num5=mysql_num_rows($query);
  ?>
  <tr>
 	<td align="center">5</td>
 	 
    <td align="center"><?=$num5?>/243</td>
  </tr>
    <?php 
	$plevel=$us['plevel'];  
  	$sql="select id from member where plevel=$plevel+6  and ppath like '%".$us['id']."%'";
  	$query=mysql_query($sql);
  	$num6=mysql_num_rows($query);
  ?>
  <tr>
 	<td align="center">6</td>
    <td align="center"><?=$num6?>/729</td>
  </tr>
    <?php 
	$plevel=$us['plevel'];  
  	$sql="select id from member where plevel=$plevel+7 and ppath like '%".$us['id']."%'";
  	$query=mysql_query($sql);
  	$num7=mysql_num_rows($query);
  ?>
  <tr>
 	<td align="center">7</td>
    <td align="center"><?=$num7?>/2187</td>
  </tr>
    <?php 
	$plevel=$us['plevel'];  
  	$sql="select id from member where plevel=$plevel+8  and ppath like '%".$us['id']."%'";
  	$query=mysql_query($sql);
  	$num8=mysql_num_rows($query);
  ?>
  <tr>
 	<td align="center">8</td>
    <td align="center"><?=$num8?>/6561</td>
  </tr>
  
</table>

</body>
</html>