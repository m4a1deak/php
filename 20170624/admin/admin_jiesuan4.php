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
	   
        $sql="select id,area4,area5 from member where ispay>0 ";
  		$arr=getAll($sql);
  	
	    foreach ($arr as $key => $row){
           
	    	$lsk=min($row['area4'],$row['area5']);
	    	if ($lsk>=50000 && $lsk<200000) {//5w
	    		edit_sql("update `member` set area4=0,area5=0 where id=".$row['id']."");
	    	}
	    }
	
		action::record("5w清空业绩","1",$_SESSION['adminid'],"$m");
		echo "<script language=javascript>alert('清空业绩完成.');window.location.href='?'</script>";
	   
	
}
if ($_POST['button2']){
	 $sql="select id,area4,area5 from member where ispay>0 ";
  		$arr=getAll($sql);
  	
	    foreach ($arr as $key => $row){
           
	    	$lsk=min($row['area4'],$row['area5']);
	    	if ($lsk>=200000 && $lsk<700000){//20w
	    		edit_sql("update `member` set area4=0,area5=0 where id=".$row['id']."");
	    	}
	    }
	
		action::record("20w清空业绩","1",$_SESSION['adminid'],"$m");
		echo "<script language=javascript>alert('清空业绩完成.');window.location.href='?'</script>";
}
if ($_POST['button3']){
	    $sql="select id,area4,area5 from member where ispay>0 ";
  		$arr=getAll($sql);
  	
	    foreach ($arr as $key => $row){
           
	    	$lsk=min($row['area4'],$row['area5']);
	    	if ($lsk>=700000 && $lsk<3000000){//70w
	    		edit_sql("update `member` set area4=0,area5=0 where id=".$row['id']."");
	    	}
	    }
	
		action::record("70w清空业绩","1",$_SESSION['adminid'],"$m");
		echo "<script language=javascript>alert('清空业绩完成.');window.location.href='?'</script>";
}
if ($_POST['button4']){
	$sql="select id,area4,area5 from member where ispay>0 ";
	$arr=getAll($sql);
	 
	foreach ($arr as $key => $row){
		 
		$lsk=min($row['area4'],$row['area5']);
		if ($lsk>=3000000 && $lsk<10000000){//300
			edit_sql("update `member` set area4=0,area5=0 where id=".$row['id']."");
		}
	}

	action::record("300w清空业绩","1",$_SESSION['adminid'],"$m");
	echo "<script language=javascript>alert('清空业绩完成.');window.location.href='?'</script>";
}

if ($_POST['button5']){
	$sql="select id,area4,area5 from member where ispay>0 ";
	$arr=getAll($sql);
	 
	foreach ($arr as $key => $row){
		 
		$lsk=min($row['area4'],$row['area5']);
		if ($lsk>=10000000){//1000w
			edit_sql("update `member` set area4=0,area5=0 where id=".$row['id']."");
		}
	}

	action::record("1000w清空业绩","1",$_SESSION['adminid'],"$m");
	echo "<script language=javascript>alert('清空业绩完成.');window.location.href='?'</script>";
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
    	<td align="center">小区业绩</td>
    	<td align="center" >总人数</td>
    	<td align="center" >查看</td>
    	<!--  
        <td align="center" >操作</td>
        -->
  </tr>
  <?php
  	$_ulevel_cl=new ulevel_class();
//   	$sql="select area4,area5,area6,area7 from member where id=1";
//   	$us=getOne($sql);
  	
	   
// 	    $rss = zjulevel(0);
  		$sql="select id,area4,area5 from member where ispay>0 ";
  		$arr=getAll($sql);
  		$lsk=0;$num1=0;$num2=0;$num3=0;$num4=0;$num5=0;
	    foreach ($arr as $key => $row){
            $lsk=0;
	    	$lsk=min($row['area4'],$row['area5']);
	    	
	    	if ($lsk>=50000 && $lsk<200000) {//5w
	    		$num1=$num1+1;
	    	}elseif ($lsk>=200000 && $lsk<700000){//20w
	    		$num2=$num2+1;
	    	}elseif ($lsk>=700000 && $lsk<3000000){//70w
	    		$num3=$num3+1;
	    	}elseif ($lsk>=3000000 && $lsk<10000000){//300
	    		$num4=$num4+1;
	    	}elseif ($lsk>=10000000){//1000w
	    		$num5=$num5+1;
	    	}
	    }
		//$sys=getOne("select * from systemparameters where id=1");
		
  ?>
  	<tr>
	    <td align="center" >5w</td>
	  	<td align="center" ><?=$num1?></td>
	  	<td align="center" ><input type="button" class="button" id="button" name="button" value="会员名单" onClick="window.location.href='admin_zju1.php?'" /></td>
	   <!--  
	    <td align="center" colspan="3"><input type="submit" class="button" id="button" name="button1" value="清空业绩" style="width:100px" /></td>
	    -->
	</tr>
		<tr>
	    <td align="center" >20w</td>
	  	<td align="center" ><?=$num2?></td>
	  	<td align="center" ><input type="button" class="button" id="button" name="button" value="会员名单" onClick="window.location.href='admin_zju2.php?'" /></td>
	   <!-- 
	    <td align="center" colspan="3"><input type="submit" class="button" id="button" name="button2" value="清空业绩" style="width:100px" /></td>
	 -->
	</tr>
		<tr>
	    <td align="center" >70w</td>
	  	<td align="center" ><?=$num3?></td>
	  	<td align="center" ><input type="button" class="button" id="button" name="button" value="会员名单" onClick="window.location.href='admin_zju3.php?'" /></td>
	    <!--  
	    <td align="center" colspan="3"><input type="submit" class="button" id="button" name="button3" value="清空业绩" style="width:100px" /></td>
	     -->
	</tr>
		<tr>
	    <td align="center" >300w</td>
	  	<td align="center" ><?=$num4?></td>
	  	<td align="center" ><input type="button" class="button" id="button" name="button" value="会员名单" onClick="window.location.href='admin_zju4.php?'" /></td>
	   <!--  
	    <td align="center" colspan="3"><input type="submit" class="button" id="button" name="button4" value="清空业绩" style="width:100px" /></td>
	-->
	</tr>
		<tr>
	    <td align="center" >1000w</td>
	  	<td align="center" ><?=$num5?></td>
	  	<td align="center" ><input type="button" class="button" id="button" name="button" value="会员名单" onClick="window.location.href='admin_zju5.php?'" /></td>
	    <!--  
	    <td align="center" colspan="3"><input type="submit" class="button" id="button" name="button5" value="清空业绩" style="width:100px" /></td>
	-->
	</tr>
  
 
  	
  
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