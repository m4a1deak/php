<?php
include("check.php");
include("check2.php");
include_once("../function.php");

session_start();
	$us=getMemberbyID($_SESSION['ID']);
	$bdName=$us['bdname'];
	$rName=$us['rname'];
	$FatherName=$us['fathername'];
	$TreePlace=$us['treeplace'];
	$UserID=$us['userid'];
	$NickName=$us['nickname'];
	$UserName=$us['username'];
	$UserTel=$us['usertel'];
	$UserAddress=$us['useraddress'];
	$UserQQ=$us['userqq'];
	$BankName=$us['bankname'];
	$BankCard=$us['bankcard'];
	$BankUserName=$us['bankusername'];
	$BankAddress=$us['bankaddress'];
	$uLevel=$us['ulevel'];
	switch ($TreePlace)
	{
		case 0:
			$quyu="顶层用户";
			break;
		case 1:
			$quyu="A区";
			break;
		case 2:
			$quyu="B区";
			break;
		case 3:
			$quyu="C区";
			break;
		case 4:
			$quyu="D区";
			break;
		case 5:
			$quyu="E区";
			break;
		case 6:
			$quyu="F区";
			break;
		case 7:
			$quyu="G区";
			break;	
	}
	switch ($uLevel)
	{
		case 1:
			$jibie="一星会员";
			break;
		case 2:
			$jibie="二星会员";
			break;
		case 3:
			$jibie="三星会员";
			break;
		case 4:
			$jibie="四星会员";
			break;
		case 5:
			$jibie="五星会员";
			break;
	}	
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
            <h1>直推列表</h1>
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
        <td height="21" align="center">会员编号</td>
        <td  align="center">会员姓名</td>
        <td align="center">会员资格</td>
        <td align="center">推荐人</td>
<!--         <td align="center">接点人</td> -->
        <td align="center">联系电话</td>
       
        <td align="center">激活时间</td>
        <td align="center">服务中心</td>
        </tr>
      <?php
	  	$pagesize = 10; //设置每页记录数 
	  	$sql = "SELECT * FROM `member` WHERE reid=".$_SESSION['ID'];
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
      	$sql = "SELECT * FROM `member` WHERE reid=".$_SESSION['ID']." limit ".$start.",".$pagesize;
		if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
			$ul=ulevel($row['ulevel']);
	  ?>
      <tr>
        <td height="21" align="center"><?=$row['userid']?></td>
        <td align="center"><?=$row['username']?></td>
        <td align="center"><?=$ul['lvname']?></td>
        <td align="center"><?=$row['rname']?></td>
    <!--     <td align="center"><?=$row['fathername']?></td>-->
        <td align="center"><?=$row['usertel']?></td>
      
        <td align="center"><?=$row['pdt']?></td>
        <td align="center"><?=$row['bdname']?></td>
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