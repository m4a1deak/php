<?php
include("check.php");
include("check2.php");
include_once("../function.php");
include_once("../class/email_class.php");
header("Content-Type: text/html;charset=utf-8");
session_start();
$information=que_select_cl('information',1);
if ($_POST['submit']){
	$uid=$_SESSION['ID'];
	$jine=(int)$_POST['jine'];
	if ($jine>0){
		$chongzhi['uid']=$uid;
		$chongzhi['nickname']=$_SESSION['nickname'];
		$chongzhi['username']=$_SESSION['username'];
		$chongzhi['jine']=$jine;
		$chongzhi['time']=now();
		echo add_insert_cl('aixinjijin',$chongzhi);
		$sql="update member set zsq=zsq-{$jine} where id={$uid}";
		mysql_query($sql);
		$sq="update systemparameters set aixinjijin=aixinjijin+{$jine} where id=1";
		mysql_query($sq);
		$_email=new email_class();
		$email=$_email->getemail();
		if ($email['cztzadmin']==1){
			$title="会员充值申请";
			$content="管理员您好,会员".$chongzhi['nickname']."于".now()."向公司申请充值：".$jine."元";
			$_email->sendemail($email['emailuser'],$email['emailname'],$title,$content);
		}
		
		echo "<script language=javascript>alert('捐赠成功，感谢您对爱心事业的支持');window.location.href='?'</script>";
	}else{
		echo "<script language=javascript>alert('您填写的数值不正确，请重新输入');window.location.href='?'</script>";	
	}
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/table.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>爱心基金</title>
<script language="javascript">
<!--
function CheckForm(){
	jine=document.form1.jine.value;
	if(jine.length == 0){
		alert("温馨提示:\n请输入充值金额.");
		document.form1.jine.focus();
		return false;
	}
	if(jine <= 0){
		alert("温馨提示:\n申请金额必须大于0.");
		document.form1.jine.focus();
		return false;
	}
	return true;
}
function checknum(ob){
	
	var reg=/^[1-9]{1,}\d*$/;
	if(!reg.test(ob.value)){
		ob.value='';
		
	}
}

-->
</script>
</head>
<body>
<table width="100%" border="0">
  <tr>
    <td valign="top" align="center"><strong>爱心基金公告</strong><br><hr></td>
  </tr>
  <tr>
    <td valign="top" ><?=$information['aixinjijin']?><p></p></td>
  </tr>
  <tr>
    <td valign="top" ><hr></td>
  </tr>
</table>
<form name="form1" method="post" action="?" onSubmit="return CheckForm();">
<table  width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
  
  <tr>
    <td height="22" align="right" width="46%" height="22" >捐赠金额：</td>
    <td align="left"><input name="jine" type="text" id="jine" size="10" maxlength="10"  onfocus="if(this.value==0)this.value='';" onblur="if(this.value==0)this.value='';" onkeyup="checknum(this);"></td>
  </tr>
</table>
<table align="center" class="ziti">
        <tr>
          <td><input name="submit" id="submit" type="submit" class="button_green" value="确  定"></td>
        </tr>
      </table>
<br>
<table width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
        <tr>
        <td height="20" colspan="6" align="center"> 捐 赠 记 录</td>
      </tr>
      <tr>
        <td align="center">会员编号</td>
        <td align="center">会员姓名</td>
        <td align="center">捐赠金额</td>
        <td align="center">捐赠时间</td>
        
    </tr>
      <?php
	  	$pagesize = 10; //设置每页记录数 
	  	$sql = "SELECT * FROM `aixinjijin` WHERE uid=".$_SESSION['ID']."";
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
      	$sql = "SELECT * FROM `aixinjijin` WHERE uid=".$_SESSION['ID']." order by id desc limit ".$start.",".$pagesize;
		if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
	  ?>
      <tr>
        <td align="center"><?=$row['nickname']?></td>
        <td align="center"><?=$row['username']?></td>
        <td align="center"><?=$row['jine']?></td>
        <td align="center"><?=$row['time']?></td>
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