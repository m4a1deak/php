<?php
include_once("../bonus.php");
include("check.php");
include("check2.php");
include_once("../function.php");
header("Content-Type: text/html;charset=utf-8");
session_start();

$ID=$_GET['ID'];
if ($ID=="") $ID=$_SESSION['ID'];
$cx="&ID=".$ID."";
$member = getMemberbyID($_SESSION['ID']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'header.php';?>
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
            <h1>奖金明细</h1>
          </div>
		<div class="table-overflow">    
		<!-- 限制手机左右拉伸宽度 -->
		 <div class="row-fluid" style=" width:848px;">
<table class="table table-bordered table-striped table-hover" style=" margin-bottom:1px;">   

<thead>
        <tr>
          <td align="center">结算时间</td>
          <td align="center" >会员</td>
          <td align="center" >类型</td>
          <td align="center" >摘要</td>
          <td align="center" >相关会员</td>
          <td align="center" >金额</td>
        </tr>
        </thead>
        <tbody>  
        <?php
	  	$pagesize = 20; //设置每页记录数 
	  	$sql = "SELECT * FROM `bonuslaiyuan` WHERE uid=".$ID."";
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
      	$sql = "SELECT * FROM `bonuslaiyuan` WHERE uid=".$ID." order by id desc limit ".$start.",".$pagesize;
		if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
	  ?>
	  <thead>
        <tr>
          <td align="center" ><?=$row['bdate'];?></td>
          <td align="center" ><?=$row['nickname']?></td>
          <?php
          switch ($row['lx']){
				case 1:
					$lx=$bonus1name;
					break;
				case 2:
					$lx=$bonus2name;
					break;
				case 3:
					$lx=$bonus3name;
					break;
				case 4:
					$lx=$bonus4name;
					break;
				case 5:
					$lx=$bonus5name;
					break;
				case 6:
					$lx=$bonus6name;
					break;
				case 7:
					$lx=$bonus7name;
					break;
				case 8:
					$lx=$bonus8name;
					break;
				case 9:
					$lx=$bonus9name;
					break;
				case 10:
					$lx=$bonus10name;
					break; 
				case 11:
					$lx=$bonus11name;
					break;
				case 12:
					$lx=$bonus12name;
					break;
				case 13:
					$lx=$bonus13name;
					break;
				case 14:
					$lx=$bonus14name;
					break;
		  }
		  ?>
          <td align="center" ><?=$lx?></td>
          <td align="center" ><?=$row['beizhu']?></td>
          <td align="center" ><?=$row['ynickname']?></td>
          <td align="center" ><?=$row['jine']?></td>
        </tr>
        </thead>
        <tbody>  
        <?php }
		}?>
      
      <tr>
            <td align="right" colspan="7" ><?php echo fenye($p,$pagesize,$sum,$total,$cx)?></td></td>
      </tr>
      
<tbody>  
      
  </table>
</div>
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
</html>