<?php
include("check.php");
include("check2.php");
include_once("../function.php");

header("Content-Type: text/html;charset=utf-8");
session_start();
$us=que_select_cl('member',$_SESSION['ID']);
if ($_POST['submit']){
	$uid=$_SESSION['ID'];
	$jine=$_POST['jine'];
	if ($jine>0){
		$ze=0;
		if ($_POST['lx']==0 or $_POST['lx']==1){
			$ze=$us['mey'];
		}elseif ($_POST['lx']==2){
			$ze=$us['zsq'];	
		}elseif ($_POST['lx']==3){
			$ze=$us['gwb'];	
		}
		if ($ze>=$jine){
			$zhuanhuan['uid']=$uid;
			$zhuanhuan['nickname']=$_SESSION['nickname'];
			$zhuanhuan['username']=$us['username'];
			$zhuanhuan['jine']=$jine;
			$zhuanhuan['zdate']=now();
			$zhuanhuan['lx']=$_POST['lx'];
			echo add_insert_cl('zhuanhuan',$zhuanhuan);
			if ($_POST['lx']==0){
				$us_update['mey']=$us['mey']-$jine;
				$us_update['zsq']=$us['zsq']+$jine;
			}elseif($_POST['lx']==1){
				$us_update['mey']=$us['mey']-$jine;
				$us_update['gwb']=$us['gwb']+$jine;
			}elseif($_POST['lx']==2){
				$us_update['zsq']=$us['zsq']-$jine;
				$us_update['gwb']=$us['gwb']+$jine;
			}elseif($_POST['lx']==3){
				$us_update['gwb']=$us['gwb']-$jine;
				$us_update['zsq']=$us['zsq']+$jine;
			}
			
			edit_update_cl('member',$us_update,$us['id']);
			echo "<script language=javascript>alert('货币转换成功.\\n本次转换金额:".$jine."');window.location.href='?'</script>";
		}else{
			echo "<script language=javascript>alert('您的余额不足,无法转换.');window.location.href='?'</script>";	
		}
	}else{
		echo "<script language=javascript>alert('转换金额不正确,请确认后重新转换');window.location.href='?'</script>";	
	}
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/table.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>货币转换</title>
<script language="javascript">
<!--
function CheckForm(){
	jine=document.form1.jine.value;
	if(jine.length == 0){
		alert("温馨提示:\n请输入转换金额.");
		document.form1.jine.focus();
		return false;
	}
	if(jine <= 0){
		alert("温馨提示:\n转换金额必须大于0.");
		document.form1.jine.focus();
		return false;
	}
	return true;
}
-->
</script>
</head>
<body>
<form name="form1" method="post" action="?" onSubmit="return CheckForm();">
<table  width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
	<tr>
    <td width="46%" height="22" align="right">金币余额：</td>
    <td width="54%" align="left"><?=$us['mey']?></td>
  </tr>
  <tr>
    <td width="46%" height="22" align="right">积分余额：</td>
    <td width="54%" align="left"><?=$us['zsq']?></td>
  </tr>
  <tr style="display:none">
    <td width="46%" height="22" align="right">购物币余额：</td>
    <td width="54%" align="left"><?=$us['gwb']?></td>
  </tr>
  <tr>
    <td width="46%" height="22" align="right">转换类型：</td>
    <td width="54%" align="left">
      <select name="lx" id="lx">
        <option value="0">金币转积分</option>
       <!-- <option value="1">奖金转购物币</option>-->
        <!--<option value="2">积分转购物币</option>
       <!-- <option value="3">购物币转积分</option>-->
      </select></td>
  </tr>
  <tr>
    <td height="22" align="right">转换金额：</td>
    <td align="left"><input name="jine" type="text" id="jine" size="10" maxlength="10"></td>
  </tr>
</table>
<table align="center">
        <tr>
          <td><input name="submit" id="submit" type="submit" class="button_green" value="转  换"></td>
        </tr>
  </table>
<br>
<table width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
        <tr>
        <td height="20" colspan="5" align="center"> 转 换 记 录</td>
      </tr>
      <tr>
        <td align="center">会员编号</td>
        <td align="center">会员姓名</td>
        <td align="center">转换金额</td>
        <td align="center">转换类型</td>
        <td align="center">转换时间</td>
        
    </tr>
      <?php
	  	$pagesize = 10; //设置每页记录数 
	  	$sql = "SELECT * FROM `zhuanhuan` WHERE uid=".$_SESSION['ID']."";
		if($query = mysql_query($sql)){
	  		$sum = mysql_num_rows($query); //计算总记录数 
		}else{
			$sum=0;	
		} 
		if($sum % $pagesize == 0) //计算总页数 
			$total = (int)($sum/$pagesize); 
		else 
			$total = (int)($sum/$pagesize) + 1; 
			if (isset($_GET['page'])) //获得页码 
			{ 
				$p = (int)$_GET['page'];
			} 
			else 
			{ 
				$p = 1;
			}
			if ($p>$total){
				$p=$total;	
			}
		$start = $pagesize * ($p - 1); //计算起始记录 
      	$sql = "SELECT * FROM `zhuanhuan` WHERE uid=".$_SESSION['ID']." order by id desc limit ".$start.",".$pagesize;
		if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
	  ?>
      <tr>
        <td align="center"><?=$row['nickname']?></td>
        <td align="center"><?=$row['username']?></td>
        <td align="center"><?=$row['jine']?></td>
        <td align="center"><?php if ($row['lx']==0){?>金币转积分<?php }elseif($row['lx']==1){?>奖金转购物币<?php }elseif($row['lx']==2){?>积分转购物币<?php }elseif($row['lx']==3){?>购物币转积分<?php }?></td>
        <td align="center"><?=$row['zdate']?></td>
		
      </tr>
      <?php
			}
		}
	  ?>
  </table>
  <table width="100%" border="0" class="ziti">
          <tr>
            <td align="left">&nbsp;</td>
            <td align="right"><?php echo fenye($p,$pagesize,$sum,$total,$cx)?></td>
          </tr>
        </table>
</form>
</body>
</html>