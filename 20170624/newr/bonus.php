<?php

include_once("../function.php");
include_once("../bonus.php");
header("Content-Type: text/html;charset=utf-8");
session_start();

$ID=$_GET['ID'];
if ($ID=="") $ID=$_SESSION['ID'];
$cx="&ID=".$ID."";
$member=getMemberbyID($_SESSION['ID']);
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
       <div class="page-header">
            <h1>奖金总表</h1>
          </div>
		<div class="table-overflow">    
		<!-- 限制手机左右拉伸宽度 -->
		 <div class="row-fluid" style=" width:848px;">
      
<table class="table table-bordered table-striped table-hover" style=" margin-bottom:1px;">   

<thead>
        <tr>
          <td align="center">结算时间</td>
          <td align="center" <?=$bonus1xs?>><?=$bonus1name?></td>
          <td align="center" <?=$bonus2xs?>><?=$bonus2name?></td>
          <td align="center" <?=$bonus3xs?>><?=$bonus3name?></td>
          <td align="center" <?=$bonus4xs?>><?=$bonus4name?></td>
          <td align="center" <?=$bonus5xs?>><?=$bonus5name?></td>
          <td align="center" <?=$bonus6xs?>><?=$bonus6name?></td>
          <td align="center" <?=$bonus7xs?>><?=$bonus7name?></td>
          <td align="center" <?=$bonus8xs?>><?=$bonus8name?></td>
          <td align="center" <?=$bonus9xs?>><?=$bonus9name?></td>
          <td align="center" <?=$bonus10xs?>><?=$bonus10name?></td>
          <td align="center" <?=$bonus11xs?>><?=$bonus11name?></td>
          <td align="center" <?=$bonus12xs?>><?=$bonus12name?></td>
          <td align="center" <?=$bonus0xs?>><?=$bonus0name?></td>
        </tr>
         </thead>
        <tbody> 
        <?php
	  	$pagesize = 10; //设置每页记录数 
	  	$sql = "SELECT * FROM `bonus` WHERE uid=".$ID."";
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
      	$sql = "SELECT * FROM `bonus` WHERE uid=".$ID." order by id desc";
		if($query = mysql_query($sql)){
        //var_dump($query);
        //echo 11111111111111111111;
		while ($row=mysql_fetch_array($query)){
        var_dump($row);
	  ?>
	  <thead>
        <tr>
          <td align="center" ><?=date("Y-m-d H:s:i",strtotime($row['bdate']))?></td>
          <td align="center" <?=$bonus1xs?>><?=$row['b1']?></td>
          <td align="center" <?=$bonus2xs?>><?=$row['b2']?></td>
          <td align="center" <?=$bonus3xs?>><?=$row['b3']?></td>
       
          <td align="center" <?=$bonus4xs?>><?=$row['b4']?></td>
          
          <td align="center" <?=$bonus5xs?>><?=$row['b5']?></td>
          <td align="center" <?=$bonus6xs?>><?=$row['b6']?></td>
          <td align="center" <?=$bonus7xs?>><?=$row['b7']?></td>
         
          <td align="center" <?=$bonus8xs?>><?=$row['b8']?></td>
          <td align="center" <?=$bonus9xs?>><?=$row['b9']?></td>
           
          <td align="center" <?=$bonus10xs?>><?=$row['b10']?></td>
         
          <td align="center" <?=$bonus11xs?>><?=$row['b11']?></td>
          <td align="center" <?=$bonus12xs?>><?=$row['b12'];?></td>
          <td align="center" <?=$bonus0xs?>><?=$row['b0']?></td>
        </tr>
         </thead>
        <?php
			}
		}
		$sql1="SELECT sum(b0),sum(b1),sum(b2),sum(b3),sum(b4),sum(b5),sum(b6),sum(b7),sum(b8),sum(b9),sum(b10),sum(b11),sum(b12) FROM `bonus` WHERE uid=".$ID."";
		if($query=mysql_query($sql1)){
			$zj=mysql_fetch_array($query);
		}
        //var_dump($zj);
	  ?>
	   <thead>
      <tr>
          <td align="center">总&nbsp;&nbsp;计</td>
          <td align="center" <?=$bonus1xs?>><?=$zj[1]?></td>
          <td align="center" <?=$bonus2xs?>><?=$zj[2]?></td>
          <td align="center" <?=$bonus3xs?>><?=$zj[3]?></td>
        
          <td align="center" <?=$bonus4xs?>><?=$zj[4]?></td>
         
          <td align="center" <?=$bonus5xs?>><?=$zj[5]?></td>
          <td align="center" <?=$bonus6xs?>><?=$zj[6]?></td>
          <td align="center" <?=$bonus7xs?>><?=$zj[7]?></td>
          
          <td align="center" <?=$bonus8xs?>><?=$zj[8]?></td>
          <td align="center" <?=$bonus9xs?>><?=$zj[9]?></td>
           
          <td align="center" <?=$bonus10xs?>><?=$zj[10]?></td>
         
          <td align="center" <?=$bonus11xs?>><?=$zj[11]?></td>
          <td align="center" <?=$bonus12xs?>><?=$zj[12]?></td>
          <td align="center" <?=$bonus0xs?>><?=$zj[0]?></td>
        </tr>
        </thead>
              <tr>
                
                <td align="right" colspan="14"><?php echo fenye($p,$pagesize,$sum,$total,$cx)?></td>
                </tr>
                <tbody>  
            </table>
            
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