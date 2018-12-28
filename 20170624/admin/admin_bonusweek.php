<?php
include("admin_check.php");
include_once("../function.php");
session_start();
header("Content-Type: text/html;charset=utf-8");
checkqx(3,9);
if ($_POST['Search']){
	$SearchContent=$_POST['SearchContent'];
	$TimeStart=$_POST['TimeStart'];
	$TimeEnd=$_POST['TimeEnd'];
	$SearchType=$_POST['SearchType'];
	if ($TimeStart!=NULL){
		if ($TimeEnd==NULL){
			$TimeEnd=now();	
		}
		$_SESSION['SearchTime']="and jsdate>='".$TimeStart."' and jsdate<='".$TimeEnd."'";	
	}else{
		$_SESSION['SearchTime']=NULL;		
	}
}else{
	if ($_GET['page']==NULL){
		$_SESSION['Search']=NULL;	
		$_SESSION['SearchTime']=NULL;
	}
}



?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/table.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<script src="../js/calendar.js"></script>
<title>奖金查询</title>
</head>
<body>
<form name="form1" method="post" action="?">
<table width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      
      <tr>
        <td align="center">结算日期</td>
        <td align="center" style="display:none">本期收入</td>
        <td align="center" style="display:none">本期拨出</td>
        <td align="center" style="display:none">本期拨比</td>
        <td align="center">查看详细</td>
    </tr>
      <?php
	  	$pagesize = 20; //设置每页记录数 
	  	$sql = "SELECT distinct yearweek(bdate) FROM `bonus` WHERE 1=1 ".$_SESSION['Search']." ".$_SESSION['SearchTime']."";
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
				if($total==0)
					$p=1;
			}
		$start = $pagesize * ($p - 1); //计算起始记录 
      	$sql = "SELECT distinct date_format(bdate,'%v') as week,date_format(bdate,'%Y') as year FROM `bonus` WHERE 1=1 ".$_SESSION['Search']." ".$_SESSION['SearchTime']." order by bdate desc limit ".$start.",".$pagesize;
		
		if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
	  ?>
      <tr>
        <td align="center" ><?=$row['year']."-".$row['week']."周"?></td>
        <td align="center" style="display:none"><?=$row['shouru']?></td>
        <td align="center" style="display:none"><?=$row['fafang']?></td>
        <td align="center" style="display:none"></td>
        <td align="center"><input type="button" class="button" id="button" name="button" value="查看" onClick="window.location.href='admin_week.php?did=<?=$row['year']."-".$row['week'];?>'" /></td>
      </tr>
      <?php
			}
		}
	  ?>
      <tr>
        <td height="21" colspan="11" align="right">
        <table width="100%" border="0">
          <tr>
            <td align="right"><?php echo fenye($p,$pagesize,$sum,$total,$cx)?></td>
          </tr>
        </table></td>
      </tr>
    </table>
    </form>
</body>
</html>