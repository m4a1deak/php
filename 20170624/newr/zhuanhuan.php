<?php
include("check.php");
include("check2.php");
include_once("../function.php");

header("Content-Type: text/html;charset=utf-8");
session_start();
$member=que_select_cl('member',$_SESSION['ID']);
if ($_POST['submit']){
	$uid=$_SESSION['ID'];
	$jine=$_POST['jine'];
	if ($jine>0){
		$ze=0;
		if ($_POST['lx']==0 or $_POST['lx']==1){
			$ze=$member['mey'];
		}elseif ($_POST['lx']==2){
			$ze=$member['zsq'];	
		}elseif ($_POST['lx']==3){
			$ze=$member['gwb'];	
		}
		if ($ze>=$jine){
			$zhuanhuan['uid']=$uid;
			$zhuanhuan['nickname']=$_SESSION['nickname'];
			$zhuanhuan['username']=$member['username'];
			$zhuanhuan['jine']=$jine;
			$zhuanhuan['zdate']=now();
			$zhuanhuan['lx']=$_POST['lx'];
			echo add_insert_cl('zhuanhuan',$zhuanhuan);
			if ($_POST['lx']==0){
				$us_update['mey']=$member['mey']-$jine;
				$us_update['zsq']=$member['zsq']+$jine;
			}elseif($_POST['lx']==1){
				$us_update['mey']=$member['mey']-$jine;
				$us_update['cfxf']=$member['cfxf']+$jine;
			}elseif($_POST['lx']==2){
				$us_update['zsq']=$member['zsq']-$jine;
				$us_update['gwb']=$member['gwb']+$jine;
			}elseif($_POST['lx']==3){
				$us_update['gwb']=$member['gwb']-$jine;
				$us_update['zsq']=$member['zsq']+$jine;
			}
			
			edit_update_cl('member',$us_update,$member['id']);
			echo "<script language=javascript>alert('货币转换成功.\\n本次转换金额:".$jine."');window.location.href='?'</script>";
		}else{
			echo "<script language=javascript>alert('您的余额不足,无法转换.');window.location.href='?'</script>";	
		}
	}else{
		echo "<script language=javascript>alert('转换金额不正确,请确认后重新转换');window.location.href='?'</script>";	
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'header.php';?>
<script src="../js/calendar.js"></script>
</head>
<body>
<?php include 'navbar.php';?>
<div id="content">
  <div class="container">
    <div class="row">
      <?php include 'leftsider.php';?>
      <div class="span9" >
    <div class="widget">
                    
                   
           <div class="page-header">
            <h1>货币转换</h1>
          </div>
          
  <div class="table-overflow"> 
    
		<!-- 限制手机左右拉伸宽度 -->
		 <div class="row-fluid" style=" width:848px;">      

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

<form name="form1" method="post" action="?" onSubmit="return CheckForm();">
<table  width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
	<tr>
    <td width="46%" height="22" align="right">奖金余额：</td>
    <td width="54%" align="left"><?=$member['mey']?></td>
  </tr>
  <tr>
    <td width="46%" height="22" align="right">报单币余额：</td>
    <td width="54%" align="left"><?=$member['zsq']?></td>
  </tr>
 
  <tr >
    <td width="46%" height="22" align="right">复投币余额：</td>
    <td width="54%" align="left"><?=$member['cfxf']?></td>
  </tr>
 
  <tr>
    <td width="46%" height="22" align="right">转换类型：</td>
    <td width="54%" align="left">
      <select name="lx" id="lx">
        
        <option value="0">奖金转报单币</option>
        <option value="1">奖金转复投币</option>
        
      
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
<table class="table table-bordered table-striped table-hover" style=" margin-bottom:1px;">   
<thead>
     
      <tr>
        <td align="center">会员编号</td>
        <td align="center">会员姓名</td>
        <td align="center">转换金额</td>
        <td align="center">转换类型</td>
        <td align="center">转换时间</td>
        
    </tr>
    </thead>
        
<tbody> 
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
        <td align="center"><?php if ($row['lx']==0){?>奖金转报单币<?php }elseif($row['lx']==1){?>奖金转复投币<?php }elseif($row['lx']==2){?>积分转购物币<?php }elseif($row['lx']==3){?>购物币转积分<?php }?></td>
        <td align="center"><?=$row['zdate']?></td>
		
      </tr>
      <?php
			}
		}
	  ?>
	   <tbody> 
  </table>
  <table width="100%" border="0" class="ziti">
          <tr>
            <td align="left">&nbsp;</td>
            <td align="right"><?php echo fenye($p,$pagesize,$sum,$total,$cx)?></td>
          </tr>
        </table>
</form>
</div>                  
            </div>
                    
                </div>	

    <!-- /span9 -->
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<!-- /content -->
<?php include 'footer.php';?>
</body>