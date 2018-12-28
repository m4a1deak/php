<?php

include_once("../function.php");
include_once("../bonus.php");
header("Content-Type: text/html;charset=utf-8");
session_start();
$us=getMemberbyID($_SESSION['ID']);
$ID=$_GET['ID'];
if ($ID=="") $ID=$_SESSION['ID'];
$cx="&ID=".$ID."";

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/table.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>奖金总表</title>
</head>
<body>
<table width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
        <tr>
          <td align="center">会员编号</td>
          <td align="center" >会员姓名</td>
          <td align="center">最大层数</td>
          <td align="center">累计业绩</td>
          <td align="center" >左区业绩</td>
          <td align="center" >右区业绩</td>
         
        </tr>
         <tr>
            <td align="center"><?php echo $us['nickname']?></td>
          <td align="center" ><?php echo $us['username']?></td>
          <td align="center"><?php echo shen($us['id']);?></td>
          <td align="center"><?php echo $us['area1']+$us['area2'];?></td>
          <td align="center" ><?php echo $us['area1']?></td>
          <td align="center" ><?php echo $us['area2']?></td>
         
        </tr>
        <?php
	  	$pagesize = 10; //设置每页记录数 
	  	$sql = "SELECT * FROM `member` WHERE ppath like '%{$_SESSION['ID']}%'";
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
      	$sql = "SELECT * FROM `member` WHERE ppath like '%{$_SESSION['ID']}%' order by pdt  limit ".$start.",".$pagesize;
		if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
	  ?>
        <tr>
            <td align="center"><?php echo $row['nickname']?></td>
          <td align="center" ><?php echo $row['username']?></td>
          <td align="center"><?php echo shen($row['id']);?></td>
          <td align="center"><?php echo $row['area1']+$us['area2'];?></td>
          <td align="center" ><?php echo $row['area1']?></td>
          <td align="center" ><?php echo $row['area2']?></td>
         
        </tr>
        <?php
			}}
		?>
</table>
<table width="100%" border="0" class="ziti">
              <tr>
                <td align="left">&nbsp;</td>
                <td align="right"><?php echo fenye($p,$pagesize,$sum,$total,$cx)?></td>
                </tr>
            </table>
</body>
</html>