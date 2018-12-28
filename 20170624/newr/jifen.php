<?php
include("check.php");
include("check2.php");
include_once("../function.php");

session_start();
	
	
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
            <h1>商品积分</h1>
          </div>
          <div class="table-overflow">
          <!-- 限制手机左右拉伸宽度 -->
		 <div class="row-fluid" style=" width:848px;">
<style type="text/css">
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
</style>

<table class="table table-bordered table-striped table-hover" style=" margin-bottom:1px;">
<thead>
  <tr valign="top">
    <td colspan="3"><table width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td height="21" align="center">商品名称</td>
        <td  align="center">积分</td>
       
      <?php
	  	$pagesize = 10; //设置每页记录数 
	  	$sql = "SELECT * FROM `goods2` WHERE 1=1 order by id ";
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
		$start = $pagesize * ($p - 1); //计算起始记录 
      	$sql = "SELECT * FROM `goods2` WHERE 1=1 order by id limit ".$start.",".$pagesize;
		if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
			$ul=ulevel($row['ulevel']);
	  ?>
      <tr>
        <td height="21" align="center"><?=$row['goodsname']?></td>
        <td align="center"><?=$row['price']?></td>
        
      </tr>
      <?php
			}
		}
	  ?>
   
    </table>
    <table width="100%" border="0" class="ziti">
  	<tr>
        <td height="21" align="right"><?php echo fenye($p,$pagesize,$sum,$total,$cx)?></td>
      </tr>
</table>
    </td>
  </tr>
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