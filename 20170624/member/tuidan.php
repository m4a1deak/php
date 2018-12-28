<?php
include("check.php");
include("check2.php");
include_once("../function.php");
include_once("../class/email_class.php");
header("Content-Type: text/html;charset=utf-8");
session_start();
if ($_POST['submit']){
	$uid=$_SESSION['ID'];
	$us=getMemberbyID($uid);
	$jine=$us['lsk'];
	if ($jine>0 || $us['ispay']==0){
		$chongzhi['uid']=$uid;
		$chongzhi['nickname']=$us['nickname'];
		$chongzhi['username']=$us['username'];
		$chongzhi['jine']=$jine;
		$chongzhi['cdate']=now();
		$chongzhi['sdate']=now();
		echo add_insert_cl('tuidan',$chongzhi);
		echo "<script language=javascript>alert('您的退单申请已经提交,请耐心等待审核.\\n申请退单金额:".$jine."\\n手续费:".$jine*0.1."');window.location.href='?'</script>";
	}else{
		echo "<script language=javascript>alert('您是免费会员,无法退单.');window.location.href='?'</script>";	
	}
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/table.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>退单申请</title>
</head>
<body>
<form name="form1" method="post" action="?">
<table align="center" class="ziti">
        <tr>
          <td><input name="submit" id="submit" type="submit" class="button_green" value="退 单 申 请"></td>
        </tr>
      </table>
<br>
<table width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
        <tr>
        <td height="20" colspan="7" align="center"> 申 请 记 录</td>
      </tr>
      <tr>
        <td align="center">会员编号</td>
        <td align="center">会员姓名</td>
        <td align="center">退单金额</td>
        <td align="center">手续费</td>
        <td align="center">申请时间</td>
        <td align="center">货币类型</td>
        <td align="center">审核状态</td>
    </tr>
      <?php
	  	$pagesize = 10; //设置每页记录数 
	  	$sql = "SELECT * FROM `tuidan` WHERE uid=".$_SESSION['ID']."";
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
      	$sql = "SELECT * FROM `tuidan` WHERE uid=".$_SESSION['ID']." order by id desc limit ".$start.",".$pagesize;
		if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
	  ?>
      <tr>
        <td align="center"><?=$row['nickname']?></td>
        <td align="center"><?=$row['username']?></td>
        <td align="center"><?=$row['jine']?></td>
         <td align="center"><?=$row['jine']*0.1?></td>
        <td align="center"><?=$row['cdate']?></td>
		<td align="center"><?php if ($row['lx']==0){?>积分<?php }elseif($row['lx']==1){?>购物币<?php }?></td>
        <td align="center"><?php if ($row['isgrant']==1){?>已退单<?php }else{?> <font color="#FF0000">未审核</font><?php }?></td>
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