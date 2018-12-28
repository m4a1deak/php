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


<table width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
<tr >
	<th align="center" style="font-size: 20px" colspan="3">团队收费情况</th>
</tr>
<tr>
 	<td align="center" >等级</td>
 	 
    <td align="center" >收费总额</td>
    <td align="center" >收费情况</td>
  </tr>
   <?php 
	$plevel=$us['plevel'];  
  	$sql="select id from member where plevel<=$plevel+8 and plevel>$plevel and ulevel=1 and ispay=1";
  	$query=mysql_query($sql);
  	$numa=mysql_num_rows($query);
  ?>
  <tr>
 	<td align="center">1</td>
 	 <td align="center"><?=$us['x1']*50?></td>
    <td align="center"><?=$us['x1']?>/3</td>
  </tr>
   <?php 
	$plevel=$us['plevel'];  
  	$sql="select id from member where plevel<=$plevel+8 and plevel>$plevel and ulevel=2 and ispay=1";
  	$query=mysql_query($sql);
  	$numb=mysql_num_rows($query);
  ?>
  <tr>
 	<td align="center">2</td>
 	 <td align="center"><?=$us['x2']*100?></td>
    <td align="center"><?=$us['x2']?>/9</td>
  </tr>
   <?php 
	$plevel=$us['plevel'];  
  	$sql="select id from member where plevel<=$plevel+8 and plevel>$plevel and ulevel=3 and ispay=1 ";
  	$query=mysql_query($sql);
  	$numc=mysql_num_rows($query);
  ?>
  <tr>
 	<td align="center">3</td>
 	 <td align="center"><?=$us['x3']*200?></td>
    <td align="center"><?=$us['x3']?>/27</td>
  </tr>
   <?php 
	$plevel=$us['plevel'];  
  	$sql="select id from member where plevel<=$plevel+8 and plevel>$plevel and ulevel=4 and ispay=1";
  	$query=mysql_query($sql);
  	$numd=mysql_num_rows($query);
  ?>
  <tr>
 	<td align="center">4</td>
 	 <td align="center"><?=$us['x4']*400?></td>
    <td align="center"><?=$us['x4']?>/81</td>
  </tr>
   <?php 
	$plevel=$us['plevel'];  
  	$sql="select id from member where plevel<=$plevel+8 and plevel>$plevel and ulevel=4 and ispay=1";
  	$query=mysql_query($sql);
  	$numd=mysql_num_rows($query);
  ?>
  <tr>
 	<td align="center">5</td>
 	 <td align="center"><?=$us['b1']*600?></td>
    <td align="center"><?=$us['b1']?>/243</td>
  </tr>
   <?php 
	$plevel=$us['plevel'];  
  	$sql="select id from member where plevel<=$plevel+8 and plevel>$plevel and ulevel=4 and ispay=1";
  	$query=mysql_query($sql);
  	$numd=mysql_num_rows($query);
  ?>
  <tr>
 	<td align="center">6</td>
 	 <td align="center"><?=$us['b2']*800?></td>
    <td align="center"><?=$us['b2']?>/729</td>
  </tr>
   <?php 
	$plevel=$us['plevel'];  
  	$sql="select id from member where plevel<=$plevel+8 and plevel>$plevel and ulevel=4 and ispay=1";
  	$query=mysql_query($sql);
  	$numd=mysql_num_rows($query);
  ?>
  <tr>
 	<td align="center">7</td>
 	 <td align="center"><?=$us['b3']*1200?></td>
    <td align="center"><?=$us['b3']?>/2187</td>
  </tr>
   <?php 
	$plevel=$us['plevel'];  
  	$sql="select id from member where plevel<=$plevel+8 and plevel>$plevel and ulevel=4 and ispay=1";
  	$query=mysql_query($sql);
  	$numd=mysql_num_rows($query);
  ?>
  <tr>
 	<td align="center">8</td>
 	 <td align="center"><?=$us['b4']*2000?></td>
    <td align="center"><?=$us['b4']?>/6561</td>
  </tr>
  
  
</table>

</body>
</html>