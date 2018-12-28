<?php
include("check.php");
include_once("../function.php");

session_start();
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
            <h1>站内短信</h1>
          </div>
      <div class="table-overflow">    
		<!-- 限制手机左右拉伸宽度 -->
		 <div class="row-fluid" style=" width:848px;">
      
      
<form name="form1" method="post" action="?">
<table class="table table-bordered table-striped table-hover" style=" margin-bottom:1px;"> 
      <?php
	  	$pagesize = 15; //设置每页记录数 
	  	$sql = "SELECT * FROM `news` WHERE isedit=1";
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
      	$sql = "SELECT * FROM `news` WHERE isedit=1 order by id desc limit ".$start.",".$pagesize;
		if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
	  ?>
      	<tr>
        <td width="70%" align="left"><a href="newscontent.php?nid=<?=$row['id']?>" style="text-decoration:none"><?=$row['newstitle']?></a></td>
        <td align="center"><?=$row['newstime']?></td>
    </tr>
      <?php
			}
		}
	  ?>
      <tr>
        <td height="21" colspan="8" align="right">
        <table width="100%" border="0">
          <tr>
            <td align="right"><?php echo fenye($p,$pagesize,$sum,$total,$cx)?></td>
          </tr>
        </table></td>
      </tr>
  </table>
    </form>
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