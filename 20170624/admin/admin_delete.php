<?php 
include("admin_check.php");
include_once("../function.php");
session_start();
header("Content-Type: text/html;charset=utf-8");
checkqx(7,25);

if ($_POST['button']){
	$sql="delete from `member` where id<>1";
	@mysql_query($sql) or die (mysql_error());
	$member_update['pai']=0;
	
	
	$member_update['ulevel']=3;
	$member_update['lsk']=9000;
	$member_update['dan']=9000;
	$member_update['ip']=0;
	
	$member_update['sgb']=0;
	$member_update['gwb']=0;
	$member_update['zsq']=0;
	$member_update['mey']=0;
	$member_update['maxmey']=0;
	$member_update['wlf']=0;
	$member_update['recount']=0;
	$member_update['recount2']=0;
	$member_update['reyeji']=0;
	$member_update['area1']=0;
	$member_update['area2']=0;
	$member_update['area3']=0;
	$member_update['area4']=0;
	$member_update['area5']=0;
	
	$member_update['narea1']=0;
	$member_update['narea2']=0;
	$member_update['narea3']=0;
	
	$member_update['yarea1']=0;
	$member_update['yarea2']=0;
	$member_update['yarea3']=0;
	
	$member_update['b0']=0;
	$member_update['b1']=0;
	$member_update['b2']=0;
	$member_update['b3']=0;
	$member_update['b4']=0;
	$member_update['b5']=0;
	$member_update['b6']=0;
	$member_update['b7']=0;
	$member_update['b8']=0;
	$member_update['b9']=0;
	$member_update['b10']=0;
	$member_update['b11']=0;
	
	$member_update['zjulevel']=0;
	$member_update['cfxf']=0;

	$member_update['zb1']=0;
	$member_update['zb4']=0;
	
	
	$member_update['bdlevel']=2;
	
    $date=date("Y-m");
	
	$member_update['jijin']=0;
	$member_update['meys']=0;
	$member_update['meys2']=0;
	$member_update['date']=$date;
	$member_update['date2']=null;
	$member_update['cy']=0;
	$member_update['num']=0;
	$member_update['jine']=0;
	$member_update['zuo']=0;
	$member_update['you']=0;
	$member_update['htjine']=0;
	$member_update['lid']=null;
	$member_update['lnickname']=null;
	
	
	edit_update_cl('member',$member_update,1);
	$system_update['yeji']=0;
	$system_update['fanli']=0;
	$system_update['aixinjijin']=0;
	
	edit_update_cl('systemparameters',$system_update,1);
	edit_delete_all('tuidan');
	edit_delete_all('bwmember');
	edit_delete_all('cwmember');
	edit_delete_all('action');
	edit_delete_all('jiesuan');
	edit_delete_all('aixinjijin');
	edit_delete_all('ulevelup');
	edit_delete_all('ulevelup2');
	edit_delete_all('lsbd');
	edit_delete_all('bonus');
	edit_delete_all('bonustime');
	edit_delete_all('chongzhi');
	edit_delete_all('huikuan');
	edit_delete_all('mail');
	edit_delete_all('orders');
	edit_delete_all('orders1');
	edit_delete_all('systemyeji');
	edit_delete_all('tixian');
	edit_delete_all('zhuanhuan');
	edit_delete_all('zhuanzhang');
	edit_delete_all('bdrecord');
	edit_delete_all('bonuslaiyuan');
	edit_delete_all('jingtai');
	edit_delete_all('jingtaimx');
	edit_delete_all('buycar');
	
	
	
	echo "<script language=javascript>alert('清空数据完成.');window.location.href='?'</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>清空数据库</title>
<link href="css/table.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
  <tr>
    <td align="center"><strong><font color="#FF0000">注意：清空数据库前请先做好数据备份，以免重要数据丢失</font></strong></td>
  </tr>
  <tr>
    <td align="center"><form id="form1" name="form1" method="post" action="">
      <input name="button" type="submit" class="btn3" id="button" value="清空数据" onClick="{if(confirm('您确定要清空数据吗?')){this.document.selform.submit();return true;}return false;}"/>
    </form></td>
  </tr>
</table>
</body>
</html>