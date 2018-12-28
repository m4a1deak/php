<?php
include("admin_check.php");
include_once("../class/member_class.php");
include_once("action.php");
session_start();
header("Content-Type: text/html;charset=utf-8");
checkqx(1,3);
if ($_POST['Search']){
	$SearchContent=$_POST['SearchContent'];
	if ($SearchContent!=NULL){
		$SearchType=$_POST['SearchType'];
		if ($SearchType==1){
			#搜索会员编号
			$_SESSION['Search']="and nickname='".$SearchContent."'";
		}elseif($SearchType==2){
			#搜索姓名
			$_SESSION['Search']="and username='".$SearchContent."'";
		}
	}else{
		$_SESSION['Search']=NULL;	
	}
}else{
	if ($_GET['page']==NULL){
		$_SESSION['Search']=NULL;	
		$_SESSION['SearchTime']=NULL;
	}
}

if($_POST['button']){
	
		
		   	    $bonus_cl=new bonus_class();
				$bonus_cl->ff();
				action::record("日结周发",1,$_SESSION['adminid'],"$m");
				echo "<script language=javascript>alert('分红结算完成.');window.location.href='?'</script>";
	
}




?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/table.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<title>服务中心</title>
</head>
<body>

<form action="?" method="post">
<table width="100%" cellpadding="5" cellspacing="1" border="0" align="center" class="table1">
<tr>
<td align="center" colspan="10"><font style="color: #8A2BE2" size="6">日结周发</font></td>
</tr>
  <tr>
    	 <td align="center">会员级别</td>
    	
         <td align="center" >上次操作时间</td>
         <td align="center" >操作</td>
  </tr>
  
  	<tr>
  	 <?php 	
  	 $sql="select id,date2 from member where id=1";
  	 $us=getOne($sql);
  	?>
	     <td align="center">所有会员</td>
	     <td align="center"><?php echo $us['date2']?></td>
	      <td align="center">
	     <input type="submit" class="button" id="button" name="button" value="分红结算" style="width:100px" />
	     </td>
	   
	  	</tr>
  
  	
  
 
</table>
</body>
</html>